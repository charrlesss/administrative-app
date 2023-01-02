<?php
include( $_SERVER['DOCUMENT_ROOT'].'/freight/views/Administrative/layout/header-setup-administrative.php');
?>

<link rel="stylesheet" href="/freight/views/css/form-style.css">

<header>
<body>
<main class="w-screen h-screen ">
    <div class="flex relative h-full w-full ">
         <!-- sidebar -->
        <?php
        include( $_SERVER['DOCUMENT_ROOT'].'/freight/views/Administrative/visitor-administrative/components/sidebar-administrative.php');
        ?>

        <div class="w-full h-full overflow-x-hidden relative">
        <!-- header -->
            <div id="visitor-header" class="absolute bg-white z-[60] top-0 r-0 l-0  w-full ">
                <div  class="flex justify-between  pl-3 xl:pr-20 pr-10 items-center">
                    <?php
                include( $_SERVER['DOCUMENT_ROOT'].'/freight/views/Administrative/visitor-administrative/components/visitor-header.administrative.php');
                ?>
                </div>
            </div>
              <!-- content -->
                <div class="mt-[64px] w-full h-[calc(100%-200px)] "> 
                    <div class="w-full h-full  relative ">
                            <div class="flex gap-x-3 p-3 md:gap-y-0 gap-y-3 l flex-wrap absolute  top-0 left-0  bg-white shadow z-[50]">
                                <button id="btn-1" class="md:text-md text-xs bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">company policy</button>
                                <button id="btn-2" class="md:text-md text-xs bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">create request appoinment</button>
                                <button id="btn-3" class="md:text-md text-xs bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">list of request appoinment</button>
                            </div>
                            <div id="render-page" class="w-full h-full relative flex justify-center items-center  ">
                                
                            </div>
                    </div>
                </div>

         </div>
    </div>
</main >
<div id="loading-qppointment-request" class="flex justify-center items-center  border-5 border-red-500 absolute top-0 bottom-0 left-0 right-0 z-[100] bg-white">
    <div role="status">
        <svg class="inline mr-2 w-8 h-8 text-gray-200 animate-spin dark:text-gray-600 fill-blue-600" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/>
            <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"/>
        </svg>
        <span class="sr-only">Loading...</span>
    </div>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js'></script>
<script src="/freight/views/js/mobilenumber-country.js"></script>
<script src="/freight/views/js/content-three-request-appoinment.js"></script>
<script src="/freight/views/js/content-two-request-appointment.js"></script>
<script src="/freight/views/js/fetch-history.js"></script>

<script>
   $("#loading-qppointment-request").hide();
    const fullname ="<?php echo $_SESSION['visitor_account']['fullname'] ?>"
    const email ="<?php echo $_SESSION['visitor_account']['email'] ?>"
    const mb_number ="<?php echo $_SESSION['visitor_account']['mb_number'] ?>"
    const country = "<?php echo $_SESSION['visitor_account']['country'] ?>"
    const address = "<?php echo $_SESSION['visitor_account']['address'] ?>"
</script>



<script>
  function handleSubmit() {
  const form = document.querySelector("#content-2");
  form.addEventListener("submit", (e) => {
    e.preventDefault();
    $("#loading-qppointment-request").show();
    $.ajax({
      type: "POST",
      url: "/freight/create-appointment-request",
      data: $("#content-2").serialize(),
      dataType: "json",
      success: function (response) {
        fetchUserHistory()
        const timeout = setTimeout(() => {
          $("#loading-qppointment-request").hide();
          clearTimeout(timeout);
          Swal.fire({
            icon: "success",
            title: response.message,
            showCancelButton: true,
            confirmButtonText: "View Request Appointment",
          }).then((result) => {
            if (result.isConfirmed) {
              afterCreateAppointment();
            }
          });
        }, 2000);
      },
    });
  });
}
</script>

<script>
    const renderPageContainer = document.querySelector('#render-page')
    
 const data =    [
    `<div id="content-1" class="md:mt-36 mt-[300px] px-3  w-full h-full absolute left-0 -translate-x-[50%] "> 
    <section class="w-full h-full">
        <h1 class="text-indigo-500 font-['Bebas_Neue'] text-black md:text-[3rem] text-[2rem] font-semibold  tracking-[4px]">
          You need to know about visiting
        </h1>
        <div class=" w-full h-auto relative mt-2 flex xl:flex-row flex-col xl:justify-center xl:items-center gap-x-4">
          <div class="p-6 xl:max-w-sm w-full bg-white xl:rounded-lg xl:border xl:border-gray-200 xl:shadow-md xl:dark:bg-gray-800 xl:dark:border-gray-700">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
              Purpose of this visitor policy
            </h5>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
              This workplace visitor policy will outline the rules that all
              company associates are expected to follow when receiving guests of
              any kind. Our workplace guest policies are intended to ensure that
              visitors do not:
            </p>
            <ul class="pl-4 list-disc text-sm mb-4">
              <li> Distract employees from work</li>
              <li>Pose a threat to anyone's safety</li>
              <li>Compromise any of our security systems or properties</li>
            </ul>
          </div>

          <div class="p-6 xl:max-w-sm w-full bg-white xl:rounded-lg xl:border xl:border-gray-200 xl:shadow-md xl:dark:bg-gray-800 xl:dark:border-gray-700">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
              Who this visitor policy applies to
            </h5>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
              A "workplace visitor" refers to any non-employee who is visiting
              for any reason. A workplace visitor can include:
            </p>
            <ul class="pl-4 list-disc text-sm mb-4">
              <li> Clients</li>
              <li>Public</li>
              <li>Vendors</li>
              <li>Job candidates</li>
              <li>Temporary workers</li>
              <li>Investors</li>
              <li>Consultants</li>
              <li>Students</li>
              <li>Family members or friendspersonal visitors</li>
            </ul>
          </div>

          <div class="p-6 xl:max-w-sm w-full bg-white xl:rounded-lg xl:border xl:border-gray-200 xl:shadow-md xl:dark:bg-gray-800 xl:dark:border-gray-700">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
              Visitor rules and procedures
            </h5>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
              A "workplace visitor" refers to any non-employee who is visiting
              for any reason. A workplace visitor can include:
            </p>
            <ul class="pl-4  list-disc text-sm mb-4">
              <li>
                All visitors should have an appointment before they arrive.
              </li>
              <li>
                All visitors must check in with the front desk or security gate,
                front office, reception area, etc. and provide a form of
                identification.
              </li>
              <li>
                All visitors will be provided with a guest pass and must wear it
                in a way that can be easily seen at all times.
              </li>
              <li>
                Checked-in visitors must wait in the designated reception area
                until they're met by the employee with whom they have an
                appointment.
              </li>
              <li>
                Visitors may not misuse our internet connection or disclose any
                confidential information, which includes taking unauthorized
                photos and recording audio or video without written consent.
              </li>
              <li>
                Visitors must check out with the front desk and return their
                guest card.
              </li>
            </ul>
          </div>
        </div>
      </section>
    </div>`,

    `<form id="content-2" class="border md:mt-36 mt-[320px] px-3  lg:w-[800px] w-full  h-[700px]   absolute left-0 -translate-x-[50%] overflow-y-scroll"> 
      <div class=" px-3 py-5 ">
      <div class="w-full h-auto my-10 px-3">
          <h1 class="md:text-2xl text-xl font-semibold tracking-[2px]">Visitor Appointment Request</h1>
      </div>
          <div class="flex gap-x-4 w-full h-auto md:flex-row flex-col ">
                <div class="form-group der md:mt-2 rounded-lg w-full">
                    <label for="fullname" class="text-[11px] uppercase text-indigo-900 font-semibold">Full Name</label>
                    <input type="text" name="fullname" id="fullname" class="form-control m-0" required>
                </div>
                <div class="form-group  md:mt-2 rounded-lg w-full">
                    <label for="email" class="text-[11px] uppercase text-indigo-900 font-semibold">Email</label>
                    <input type="email" name="email" id="email" class="form-control m-0" required>
                </div>
            </div>
            <div class="flex gap-x-4 w-full h-auto md:flex-row flex-col">
              <div class="form-group  w-full ">
                  <label for="countries" class="text-[11px] uppercase text-indigo-900 font-semibold">Mobile Number</label>
                  <div class="border px-4  rounded-lg" id="container-country-number">
                      <div  class=" flex flex-row items-center relative  h-[50px] ">
                          <select   name="country-mb" id="countries" class="text-gray-500 border-none border w-[78px] h-[40px] outline-none"  required>
                              <!-- <option selected value="qweqweqwe">Chose</option> -->
                          </select>
                          <input id="mb-number" placeholder="Enter Your Number" name="mb-number" type="text"  class=" text-gray-500 form-control-mb border-none outline-none" required>
                      </div>
                    
                </div>
              </div>
                <div class="form-group w-full ">
                  <label for="address" class="text-[11px] uppercase text-indigo-900 font-semibold">Address</label> 
                  <textarea name="address" rows="1" class= " form-control" id="address" placeholder="Address" required></textarea>
              </div>
          </div>

          <div class="flex gap-x-4 w-full h-auto md:flex-row flex-col">
              <div class="form-group w-full ">
                  <label for="time-visit" class="text-[11px] uppercase text-indigo-900 font-semibold">Time of visit</label> 
                    <input type="time" name="time-visit" id="time-visit" class="form-control m-0" required>
              </div>
              <div class="form-group w-full ">
                  <label for="date-visit" class="text-[11px] uppercase text-indigo-900 font-semibold">Date Of Visit</label> 
                    <input type="date" name="date-visit" id="date-visit" class="form-control m-0" required>
              </div>
          </div>
          <div class="form-group w-full ">
                <label for="participants" class="text-[11px] uppercase text-indigo-900 font-semibold">Participants</label> 
                  <input type="text" name="participants" id="participants" class="form-control m-0" required>
            </div>

            <div class="form-group w-full ">
                  <label for="purpose" class="text-[11px] uppercase text-indigo-900 font-semibold">purpose</label> 
                    <textarea  rows="3" name="purpose" id="purpose" class="form-control m-0" required></textarea>
            </div>

            <div class="flex flex-col" id="participants-input">
            </div>

            <div class="mt-10 ">
                  <button type="submit" data-modal-toggle="defaultModal" type="button" class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg md:text-sm text-xs px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit Request</button>
            </div>
      </div>
    </form>`,

    `<div id="content-3" class="md:mt-36 mt-[450px]  px-3   lg:w-[800px] w-full  h-[700px] absolute left-0 -translate-x-[50%]"> 
    </div>`,
]

let count = 0

function buttonAction(cb ,value){
  $(`#content-${count+1}`).animate({left:'200%'},500 ,function(){
        count = value
        renderPageContainer.innerHTML = data[count]
        $(`#content-${count+1}`).animate({left:'50%'},500)
        if(cb !== null){
          cb()
        }
  })
}

function buttonClick(){
    $('#btn-1').click(function(){
      buttonAction(null,0)
    })
    $('#btn-2').click(function(){
      buttonAction(initContentTwo,1)
    })
    $('#btn-3').click(function(){
      buttonAction(initContentThree,2)
    })
}

function renderContent(){
    renderPageContainer.innerHTML = data[count]

    $(`#content-${count+1}`).animate({left:'50%'},500)
    buttonClick()
}

function afterCreateAppointment(){
  buttonAction(initContentThree,2)
}

renderContent()



</script>



<?php
include( $_SERVER['DOCUMENT_ROOT'].'/freight/views/Administrative/layout/footer-setup-administrative.php');
?>