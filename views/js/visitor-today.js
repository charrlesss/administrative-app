function fetchVisitorToday(url) {
  $.ajax({
    url: "/freight/get-visitor-today",
    type: "GET",
    dataType: "json", // added data type
    success: function (res) {
      displayVisitorToday(res, url);
    },
  });
}

function displayVisitorToday(data, url) {
  const visitorTodayList = document.querySelector("#visitor-today-list");

  if (data.visitor_today.length === 0) {
    visitorTodayList.innerHTML = `
        ,,<table class=" h-full  w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="relative border-b-[1px]  text-[12px] font-semibold text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr >
                    <th scope="col" class="py-3 px-6">
                        Profile
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Email
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Date Visit
                    </th>
                </tr>
            </thead>
            <tbody class="relative h-full w-full">
            
                <tr class="  flex justify-center w-full ">
                    <td class="text-2xl font-semibold w-full flex justify-center items-center absolute  top-0 left-0 right-0 bottom-0 h-[400px]">
                        Empty
                    </td>
                </tr>
                
            </tbody>
        </table>
        `;
    return;
  }

  let display = `<table class=" h-full  w-full text-sm text-left text-gray-500 dark:text-gray-400">
    <thead class="relative border-b-[1px]  text-[12px] font-semibold text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <tr >
            <th scope="col" class="py-3 px-6">
                Profile
            </th>
            <th scope="col" class="py-3 px-6">
                Email
            </th>
            <th scope="col" class="py-3 px-6">
                Date Visit
            </th>
        </tr>
    </thead>
    <tbody>
    ${tableDataVisitorToday(data, url)}
    </tbody>
</table>`;

  visitorTodayList.innerHTML = display;
}

function tableDataVisitorToday(data, url) {
  let display = "";
  data.visitor_today.forEach((element) => {
    display += `<tr class=" w-full bg-gray-50 border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-indigo-100 ">
                  <td class="pl-4 py-2">
                  <img
                       class=" p-1 w-10 h-10 rounded-full ring-2 ring-indigo-300 dark:ring-indigo-500"
                       src="${url}/${element.profile}"
                      alt="logo"
                      />
                  </td>
                  <td class="pl-4 py-2" >${element.email}</td>
                  <td class="pl-4 py-2" >${data.date}</td>
          </tr>`;
  });

  return display;
}
