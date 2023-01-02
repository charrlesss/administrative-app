let timeout = undefined;
let matchCount = 0;
async function fetchData(fetchOption, cb) {
  const data = await fetch(fetchOption);
  const res = await data.json();
  if (matchCount !== 0 && matchCount !== res.lastcount) {
    if (
      res.lastrow[0].country &&
      res.lastrow[0].profile &&
      res.lastrow[0].birthdate &&
      res.lastrow[0].address &&
      res.lastrow[0].gender
    ) {
      matchCount = res.lastcount;
      cb();
      timeout = setTimeout(() => {
        fetchData(fetchOption, cb);
      }, 100);

      return Object.values(res)[0];
    } else {
      timeout = setTimeout(() => {
        fetchData(fetchOption, cb);
      }, 100);

      return Object.values(res)[0];
    }
  }
  matchCount = res.lastcount;
  timeout = setTimeout(() => {
    fetchData(fetchOption, cb);
  }, 100);

  return Object.values(res)[0];
}

function filter(arr, input) {
  return arr.filter(function (data) {
    if (
      data.fullname.toLowerCase().search(input.toLowerCase()) >= 0 ||
      data.mb_number.toLowerCase().search(input.toLowerCase()) >= 0 ||
      data.email.search(input.toLowerCase()) >= 0
    ) {
      return data;
    }
  });
}

function searchData(arr, input) {
  if (!input) {
    return arr.sort(function (a, b) {
      return a.fullname.localeCompare(b.fullname);
    });
  }
  return filter(arr, input).sort(function (a, b) {
    return (
      a.fullname.localeCompare(b.fullname) ||
      a.mb_number.localeCompare(b.mb_number) ||
      a.email.localeCompare(b.email)
    );
  });
}

function displayTable(tableHeader, tableData) {
  const table = `
  <div class="overflow-x-auto sm:-mx-6 lg:-mx-8 h-full">
    <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
          <table class="min-w-full">
            ${tableHeader}
            ${tableData}
        </table>
    </div>
  </div>
`;

  return table;
}

function displaydata(arr, { displayData }) {
  return displayData(arr);
}

function displayHeader({ headerArray, displayData, res }) {
  let trHeader = `
  <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
     <tr  >
  `;
  headerArray.forEach((data) => {
    trHeader += `
          <th class="text-sm font-medium text-gray-900 px-6 py-4 text-left cursor-pointer z-[100]">
            <div id='${
              data.title
            }' class='flex gap-x-2 ' onclick='sortedBy(this,${JSON.stringify(
      res
    )},${function (res) {
      root.innerHTML = displayTable(
        displayHeader({ headerArray, displayData, res }),
        displaydata(res, { displayData })
      );
    }})' >
              <p>${data.title}</p>
                ${data.icon}
           </div>
          </th>
      `;
  });
  trHeader += `
     </tr>
  </thead>
`;
  return trHeader;
}

async function initializeDisplay(root, fetchOption, headerOption, dataOption) {
  root.innerHTML = displayTable(
    displayHeader({
      ...headerOption,
      ...dataOption,
      res: await fetchData(fetchOption, function () {
        initializeDisplay(root, fetchOption, headerOption, dataOption);
      }),
    }),
    displaydata(
      await fetchData(fetchOption, function () {
        initializeDisplay(root, fetchOption, headerOption, dataOption);
      }),
      dataOption
    )
  );
}

async function init(fetchOption, headerOption, root, dataOption) {
  initializeDisplay(root, fetchOption, headerOption, dataOption);

  document.querySelector("#search").addEventListener("input", async (e) => {
    clearTimeout(timeout);
    root.innerHTML = displayTable(
      displayHeader({
        ...headerOption,
        ...dataOption,
        res: await fetchData(fetchOption, function () {
          initializeDisplay(root, fetchOption, headerOption, dataOption);
        }),
      }),
      displaydata(
        searchData(
          await fetchData(fetchOption, function () {
            initializeDisplay(root, fetchOption, headerOption, dataOption);
          }),
          e.target.value
        ),
        dataOption
      )
    );
  });

  document.querySelector("#search").addEventListener("focusout", function (e) {
    if (e.target.value) {
      return;
    }
    initializeDisplay(root, fetchOption, headerOption, dataOption);
  });
}
