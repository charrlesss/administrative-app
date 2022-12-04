const fetchRequestCreated = [];

function initContentThree() {
  fetch_Data();
}

function fetch_Data() {
  $.ajax({
    url: "/freight/get-appointment-request",
    type: "GET",
    dataType: "json", // added data type
    success: function (res) {
      if (res.request_appointment.length === 0) {
        displayData();
        return;
      }

      fetchRequestCreated.splice(0, fetchRequestCreated.length);
      fetchRequestCreated.push({
        appointment: res.request_appointment,
      });
      displayData();
    },
  });
}

function displayData() {
  const content = document.querySelector("#content-3");
  console.log(content);
  console.log(fetchRequestCreated);

  if (!content) return;

  let display = "";

  if (fetchRequestCreated.length === 0) {
    display += `
    <div class='z-[100] absolute left-0 top-0 right-0 bottom-0 w-full h-full  flex justify-center items-center'>
    <h1 class='text-3xl font-semibold'>Empty</h1>
    </div>`;
  }

  display += `<div class="overflow-x-auto relative">
  <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
          <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
              <tr>
                  <th scope="col" class="py-3 px-6">
                      Purpose
                  </th>
                  <th scope="col" class="py-3 px-6">
                      Date 
                  </th>
                  <th scope="col" class="py-3 px-6">
                      Time
                  </th>
                  <th scope="col" class="py-3 px-6">
                      status
                  </th>
                  <th scope="col" class="py-3 px-6">
                      Action
                  </th>
              </tr>
          </thead>
          <tbody class='relative'>    
               
              ${tableData()}
          </tbody>
      </table>
</div>
   
  `;
  content.innerHTML = display;
}

function tableData() {
  let dataDisplay = "";
  if (fetchRequestCreated.length === 0) {
    return dataDisplay;
  }

  fetchRequestCreated[0].appointment?.forEach((data) => {
    dataDisplay += `<tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
    <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
      ${data.purpose.slice(0, 15)}...
    </th>
    <td class="py-4 px-6">
    ${data["date-visit"]}
    </td>
    <td class="py-4 px-6">
    ${data["time-visit"]}
    </td>
    <td class="py-4 px-6 ${
      data["status"].trim() === "under review"
        ? "text-amber-500"
        : data["status"].trim() === "declined"
        ? "text-red-500"
        : "text-green-500"
    } font-semibold">
      ${data["status"]}
    </td>
    <td class="py-4 px-6 flex gap-x-2">
        <a href="/freight/administrative/visitor-dashboard/appointment-request/view/${
          data["visitor_request_id"]
        }" class='text-blue-500'>
        <svg class="h-4 w-4 text-blue-500"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <path d="M10 12h-7l3 -3m0 6l-3 -3" />  <path d="M14 12h7l-3 -3m0 6l3 -3" />  <path d="M3 6v-3h18v3" />  <path d="M3 18v3h18v-3" /></svg>
        </a>
        <a  href="/freight/administrative/visitor-dashboard/appointment-request/edit/${
          data["visitor_request_id"]
        }">
          <svg class="h-4 w-4 text-purple-500"  viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <path d="M9 7 h-3a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-3" />  <path d="M9 15h3l8.5 -8.5a1.5 1.5 0 0 0 -3 -3l-8.5 8.5v3" />  <line x1="16" y1="5" x2="19" y2="8" /></svg>
        </a>
        <a href="/freight/administrative/visitor-dashboard/appointment-request/delete/${
          data["visitor_request_id"]
        }">
          <svg class="h-4 w-4 text-red-500"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <path d="M21 4H8l-7 8 7 8h13a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2z" />  <line x1="18" y1="9" x2="12" y2="15" />  <line x1="12" y1="9" x2="18" y2="15" /></svg>
        </a>
    </td>
  </tr>`;
  });

  return dataDisplay;
}
