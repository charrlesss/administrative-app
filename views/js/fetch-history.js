let countNotificationNotSeen = 0;
const itemContainer = document.getElementById("notification-list");
let countAffect = 0;
function sortArray(arr) {
  arr.sort(function (a, b) {
    return (
      new Date(parseInt(b["date-time"]) * 1000) -
      new Date(parseInt(a["date-time"]) * 1000)
    );
  });

  return arr;
}

function fetchUserHistory(getURL, SeenURL) {
  $.ajax({
    url: getURL,
    type: "GET",
    dataType: "json",
    success: function (res) {
      if (countAffect !== 0 && countAffect !== res.affect) {
        resetHistory();
      }
      countAffect = res.affect;
      countNotificationNotSeen = 0;

      sortArray(res.history).forEach((data, idx) => {
        let id = null;
        if (data.history_id) {
          id = data.history_id;
        } else if (data["visitor-management-history-id"]) {
          id = data["visitor-management-history-id"];
        }
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

        item.className = `py-4 border-b  bg-white px-2 text-xs cursor-pointer ${
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
        if (itemContainer.childNodes.length === res.history.length) {
          notificationHandleClick(
            item,
            id,
            countNotificationNotSeen,
            getURL,
            SeenURL
          );
          return;
        }
        itemContainer.append(item);
        item.append(container);
        container.append(subContainerTwo);
        container.append(subContainerOne);
        subContainerTwo.append(img);
        subContainerOne.append(message);
        subContainerOne.append(data_time);

        notificationHandleClick(
          item,
          id,
          countNotificationNotSeen,
          getURL,
          SeenURL
        );
      });
    },
    error: function (e, er, err) {
      console.log(e, er, err);
    },
  });

  setTimeout(() => {
    fetchUserHistory(getURL, SeenURL);
  }, 1000);
}

function notificationHandleClick(
  item,
  id,
  countNotificationNotSeen,
  getURL,
  SeenURL
) {
  item.addEventListener("click", (e) => {
    e.stopPropagation();
    if (countNotificationNotSeen === 0) {
      return;
    }

    $.ajax({
      url: SeenURL,
      type: "POST",
      data: { history_id: id },
      dataType: "json",
      success: function () {
        resetHistory();
        fetchUserHistory(getURL, SeenURL);
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

function MarkAllAsRead(getURL, seenURL, MarkAllAsReadUrl) {
  $("#read-all").click(function (e) {
    e.stopPropagation();
    if (countNotificationNotSeen === 0) {
      return;
    }

    $.ajax({
      url: MarkAllAsReadUrl,
      type: "GET",
      dataType: "json",
      success: function () {
        resetHistory();
        fetchUserHistory(getURL, seenURL);
      },
    });
  });
}

function resetHistory() {
  itemContainer.innerHTML = "";
}
