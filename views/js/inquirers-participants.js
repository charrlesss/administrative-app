function inquirersParticipants(cb) {
  $.ajax({
    type: "GET",
    url: "/freight/get-inquirers-participants",
    dataType: "json",
    success: cb,
    error: function (_, __, ___) {
      console.log(_);
      console.log(__);
      console.log(___);
    },
  });
}

function displayInquirersParticipants(container, res, url) {
  container.innerHTML = "";
  res.participants.forEach((data) => {
    const div = document.createElement("div");
    const img = document.createElement("img");
    const subCon = document.createElement("div");
    const fullname = document.createElement("p");
    const message = document.createElement("p");
    const messageSubCon = document.createElement("div");
    const date_message = document.createElement("p");

    div.className =
      "flex relative w-full h-auto lg:gap-x-2  items-center lg:justify-start justify-center  lg:pl-5 py-2 cursor-pointer hover:bg-indigo-100";
    img.className = `p-1 w-10 h-10 rounded-full ring-2 
      text-xs ${
        Boolean(parseInt(data.seen))
          ? "ring-indigo-300 dark:ring-indigo-500"
          : "ring-indigo-700 dark:ring-indigo-700"
      }`;

    fullname.className = "lg:block hidden capitalize text-xl font-semibold";
    message.className = `lg:block hidden text-md ${
      Boolean(parseInt(data.seen)) ? "text-gray-400" : "font-bold"
    }`;

    messageSubCon.className =
      "lg:flex hidden  gap-x-1  h-auto w-auto items-end";
    date_message.className = "text-xs text-gray-400 pb-1 float-rigth";

    const dateofmessage = moment(data.message_createdat * 1000).fromNow();
    img.src = url + data.profile;
    fullname.textContent = data.fullname.trim();

    date_message.textContent =
      Date.now() <= data.message_createdat * 1000 + 120 * 1000
        ? ". 1m"
        : ". " +
          dateofmessage.split(" ")[0] +
          dateofmessage.split(" ")[1].charAt(0);
    message.textContent =
      data.message.length >= 25
        ? data.message.slice(0, 25) + "..."
        : data.message;

    div.addEventListener("click", () => {
      if (!Boolean(parseInt(data.seen))) {
        HandleParticipantClick(data.from_id);
        return;
      }

      window.location.href = `/freight/administrative/admin/visitor-management-dashboard/inquirers/${data.from_id}`;
    });

    div.append(img);
    div.append(subCon);
    subCon.append(fullname);
    subCon.append(messageSubCon);
    messageSubCon.append(message);
    messageSubCon.append(date_message);
    container.append(div);
  });
}

function HandleParticipantClick(from_id) {
  $.ajax({
    type: "POST",
    url: "/freight/update-seen-inquirers-participants",
    dataType: "json",
    data: { message_id: from_id },
    success: function () {
      window.location.href = `/freight/administrative/admin/visitor-management-dashboard/inquirers/${from_id}`;
    },
    error: function (_, __, ___) {
      console.log(_);
      console.log(__);
      console.log(___);
    },
  });
}
