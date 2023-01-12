function initContentTwo() {
  mobileNumber();
  focusInput();
  defaultValue();
  incrementInputOfParticipants();
  handleSubmit();
}

function mobileNumber() {
  countryPN.forEach((data) => {
    const option = document.createElement("option");
    if (country && data.name === country) {
      option.textContent = `(${data["dial_code"]})`;
      option.value = data.name;
      option.selected = true;
      $("#countries").append(option);

      return;
    }

    option.textContent = `${data["name"]}` + " " + `(${data["dial_code"]})`;
    option.value = data.name;

    $("#countries").append(option);
  });

  $("#countries").change(function (e) {
    e.preventDefault();
    const optionSelected = $("#countries :selected")
      .text()
      .toString()
      .split(" ");
    $("#countries :selected")[0].textContent =
      optionSelected[optionSelected.length - 1];
  });
}

function focusInput() {
  $("#mb-number").focus(function () {
    document
      .querySelector("#container-country-number")
      .closest("div").style.border = "1px solid  #5A8DEE";
  });

  $("#countries").focus(function () {
    document
      .querySelector("#container-country-number")
      .closest("div").style.border = "1px solid  #5A8DEE";
  });

  $("#mb-number").focusout(function () {
    document
      .querySelector("#container-country-number")
      .closest("div").style.border = "";
  });

  $("#countries").focusout(function () {
    document
      .querySelector("#container-country-number")
      .closest("div").style.border = "";
  });
}

function incrementInputOfParticipants() {
  const input = document.querySelector("#participants");

  const participantsInput = document.querySelector("#participants-input");

  input.addEventListener("input", (e) => {
    let additionalinput = "";
    if (e.target.value === "") {
      additionalinput = "";
    }

    for (let i = 0; i <= parseInt(e.target.value) - 1; i++) {
      additionalinput += `
    <div class="flex gap-x-4 w-full h-auto md:flex-row flex-col border-b-4 border-gray-500 p-1">
        <div class="form-group  md:mt-2 rounded-lg w-full">
            <label for="participant-fullname-${i}" class="text-[11px] uppercase text-indigo-900 font-semibold">Participant Fullname-${
        i + 1
      }</label>
            <input type="text" name="participant-fullname-${i}" id="participant-fullname-${i}" class="form-control m-0" required>
        </div>
    </div>
    `;
    }
    participantsInput.innerHTML = additionalinput;
  });
}

function defaultValue() {
  $("#fullname").val(`${fullname}`);
  $("#email").val(`${email}`);
  $("#mb-number").val(`${mb_number}`);
  $("#address").val(`${address}`);
}
