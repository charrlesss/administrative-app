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
                include( $_SERVER['DOCUMENT_ROOT'].'/freight/views/Administrative/admin-administrative/visitor-management/components/sidebar.administrative.php');
                ?>
        <div class="w-full h-full overflow-x-hidden relative">
        <!-- header -->
            <div id="visitor-header" class="absolute bg-white z-[50] top-0 r-0 l-0  w-full shadow-lg">
                <div  class="flex justify-between  pl-3 xl:pr-20 pr-10 items-center">
                    <?php
                include( $_SERVER['DOCUMENT_ROOT'].'/freight/views/Administrative/admin-administrative/visitor-management/components/header.administrative.php');
                ?>
                </div>
            </div>
              <!-- content -->
                <div class="mt-[64px] w-full h-[calc(100%-200px)] "> 
                <div id="render-page" class="w-full h-full relative flex justify-center items-center  ">
                <form id="create-appointmet" class="border mt-36 px-3  lg:w-[800px] w-full  h-[700px]   absolute left-[50%] -translate-x-[50%] overflow-y-scroll"> 
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
                    </form>
                </div>
            </div>
         </div>
    </div>
</main >
<div id="loading-edit-appointment-request" class="flex justify-center items-center  border-5 border-red-500 absolute top-0 bottom-0 left-0 right-0 z-[100] bg-white">
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

<script>
    const country = ''
    $("#loading-edit-appointment-request").hide();
    mobileNumber()
</script>

<script>
    $("#create-appointmet").submit(function(e){

        e.preventDefault();

        const serialize =$("#create-appointmet").serializeArray().reduce(function (output, value) {
        output[value.name] = value.value
        return output
        }, {})

        $("#loading-edit-appointment-request").show();
        $.ajax({
        type: "POST",
        url: "/freight/create-appointment-request",
        data:({...serialize,visitor_id:"<?php echo $visitor_id; ?>"}),
        dataType: "json",
        success: function (response) {
            $("#loading-edit-appointment-request").hide();
            Swal.fire({
                icon: "success",
                title: response.message,
                showCancelButton: true,
                confirmButtonText: "View Request Appointment",
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = '/freight/administrative/admin/visitor-management-dashboard/appointment-request'
                }
            });
        },
    });


    })
</script>
<?php
include( $_SERVER['DOCUMENT_ROOT'].'/freight/views/Administrative/layout/footer-setup-administrative.php');
?>










