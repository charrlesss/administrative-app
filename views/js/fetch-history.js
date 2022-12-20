let countNotificationNotSeen = 0;
function sortArray(arr) {
  arr.sort(function (a, b) {
    return (
      new Date(parseInt(b["date-time"]) * 1000) -
      new Date(parseInt(a["date-time"]) * 1000)
    );
  });

  return arr;
}

function fetchUserHistory() {
  const itemContainer = document.getElementById("notification-list");
  itemContainer.innerHTML = "";
  $.ajax({
    url: "/freight/get-history",
    type: "GET",
    dataType: "json",
    success: function (res) {
      countNotificationNotSeen = 0;

      sortArray(res.history).forEach((data, idx) => {
        if (!Boolean(parseInt(data.seen))) {
          countNotificationNotSeen++;
        }
        const date = new Date(
          parseInt(data["date-time"]) * 1000
        ).toLocaleString();

        const item = document.createElement("li");
        const container = document.createElement("div");
        const subContainerOne = document.createElement("div");
        const subContainerTwo = document.createElement("div");
        const message = document.createElement("p");
        const data_time = document.createElement("p");
        const img = document.createElement("img");

        item.className = `py-4 border-b  px-2 text-xs cursor-pointer ${
          !Boolean(parseInt(data.seen)) && "bg-gray-100"
        }`;
        container.className = "flex gap-x-2";
        data_time.className = "text-[9px] text-gray-400";
        message.className = "text-md font-semibold";
        img.className =
          " p-1 w-10 h-10 rounded-full ring-1 ring-indigo-300 dark:ring-indigo-500";
        img.src = profileImageHeader;
        message.textContent = data.message;
        data_time.textContent = `${date.split(",")[0]} at ${
          date.split(",")[1]
        }`;

        updateNotificationCount(countNotificationNotSeen);

        itemContainer.append(item);
        item.append(container);
        container.append(subContainerTwo);
        container.append(subContainerOne);
        subContainerTwo.append(img);
        subContainerOne.append(message);
        subContainerOne.append(data_time);

        notificationHandleClick(
          item,
          data.history_id,
          countNotificationNotSeen
        );
      });
    },
  });
}

function notificationHandleClick(item, id, countNotificationNotSeen) {
  item.addEventListener("click", (e) => {
    e.stopPropagation();
    console.log(countNotificationNotSeen);
    if (countNotificationNotSeen === 0) {
      return;
    }

    $.ajax({
      url: "/freight/seen-one-history",
      type: "POST",
      data: { history_id: id },
      dataType: "json",
      success: function () {
        fetchUserHistory();
      },
    });
  });
}

function updateNotificationCount(countNotificationNotSeen) {
  if (countNotificationNotSeen === 0) {
    notificationCount.style.display = "none";
    return;
  }
  notificationCount.style.display = "";
  notificationCount.dataset.notificationCount = countNotificationNotSeen;
  notificationCount.textContent = notificationCount.dataset.notificationCount;
}

function MarkAllAsRead() {
  $("#read-all").click(function (e) {
    e.stopPropagation();
    console.log(countNotificationNotSeen);
    if (countNotificationNotSeen === 0) {
      return;
    }

    $.ajax({
      url: "/freight/seen-all-history",
      type: "GET",
      dataType: "json",
      success: function () {
        fetchUserHistory();
      },
    });
  });
}
