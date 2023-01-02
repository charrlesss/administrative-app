function getAllMessagesVisitorManagement(visitor_id, cb) {
  $.ajax({
    type: "POST",
    url: "/freight/get-message-visitor-management",
    dataType: "json",
    data: { visitor_id },
    success: cb,
    error: function (_, __, ___) {
      console.log(_);
      console.log(__);
      console.log(___);
    },
  });
}

function displayllMessagesVisitorManagement(container, res, url) {
  container.innerHTML = "";

  sortMessagesFromDate(res.message).forEach((data) => {
    const div = document.createElement("div");
    const div_con = document.createElement("div");
    const message = document.createElement("p");
    const img = document.createElement("img");

    img.className = `p-1 w-8 h-8 rounded-full ring-2  ring-indigo-300 dark:ring-indigo-500`;
    div_con.className = "flex gap-x-2 items-center";

    div.id = `${
      Boolean(parseInt(data.visitor_management_sender))
        ? "message-from"
        : "message-to"
    }`;

    message.className = `${
      data.message.length > 27 ? "from-top" : "from-bottom"
    }`;
    
    div.className = "flex gap-x-2";
    img.src = url + data.profile;
    message.textContent = data.message;
 

    if (Boolean(parseInt(data.visitor_management_sender))) {
      div_con.append(message);
      div_con.append(img);
      div.append(div_con);
      container.append(div);
      return;
    }
    div_con.append(img);
    div_con.append(message);
    div.append(div_con);
    container.append(div);
  });
}

let prevValue = 0;
function displayMessagesVisitor(container, res, url, cb) {
  let currentValue = res.visitor_management;
  if (prevValue !== 0 && currentValue !== prevValue) {
    cb();
  }
  prevValue = res.visitor_management;

  container.innerHTML = "";
  sortMessagesFromDate(res.message).forEach((data) => {
    const div = document.createElement("div");
    const div_con = document.createElement("div");
    const message = document.createElement("p");
    const img = document.createElement("img");

    img.className = `p-1 w-8 h-8 rounded-full ring-2  ring-indigo-300 dark:ring-indigo-500`;
    div_con.className = "flex gap-x-2";

    div.id = `${
      Boolean(parseInt(data.visitor_sender)) ? "message-from" : "message-to"
    }`;
    message.className = `${
      data.message.length > 27 ? "from-top" : "from-bottom"
    }`;

    
    div.className = "flex gap-x-2";
    img.src = url + data.profile;
    message.textContent = data.message;

    if (Boolean(parseInt(data.visitor_sender))) {
      div_con.append(message);
      div_con.append(img);
      div.append(div_con);
      container.append(div);
      return;
    }

    div_con.append(img);
    div_con.append(message);
    div.append(div_con);
    container.append(div);
  });
}

function sortMessagesFromDate(messages) {
  messages.sort(function (a, b) {
    return (
      new Date(parseInt(b["message_createdat"]) * 1000) -
      new Date(parseInt(a["message_createdat"]) * 1000)
    );
  });

  return messages.reverse();
}
