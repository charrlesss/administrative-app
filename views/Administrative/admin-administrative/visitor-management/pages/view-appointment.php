<?php
include( $_SERVER['DOCUMENT_ROOT'].'/freight/views/Administrative/layout/header-setup-administrative.php');
?>

<header>
<body>

<main class="w-screen h-screen ">
    <div class="flex relative h-full w-full ">
         <!-- sidebar -->
        <?php
        include( $_SERVER['DOCUMENT_ROOT'].'/freight/views/Administrative/admin-administrative/visitor-management/components/sidebar.administrative.php');
        ?>

        <div class="w-full h-full overflow-x-hidden relative" onclick='closekAction()'>
        <!-- header -->
            <div  id="visitor-header" onclick='closekAction()' class="absolute bg-white z-[60] top-0 r-0 l-0  w-full shadow-lg">
                <div  class="flex justify-between  pl-3 xl:pr-20 pr-10 items-center">
                    <?php
                    
                include( $_SERVER['DOCUMENT_ROOT'].'/freight/views/Administrative/admin-administrative/visitor-management/components/header.administrative.php');
                ?>
                </div>
            </div>
         <!-- content -->
         <div class="relative  w-full h-screen  flex  justify-center bg-gray-500 ">
            
            <div class="mt-16 p-3 relative  w-full  h-full  flex justify-center border relative bg-gray-500">
                <div class=" relative md:w-[700px] w-full border h-[850px] p-3 shadow-xl bg-white">
                    <p id="status" class='absolute border top-2 right-2 p-1 rounded-lg'></p>
                    <div class=" absolute top-11 flex flex-col gap-y-2 right-0 bg-white p-2">
                        <a href ='/freight/administrative/visitor-dashboard/appointment-request' class='border'>
                            <svg class="h-6 w-6 hover:text-green-500  text-indigo-500"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <line x1="12" y1="5" x2="12" y2="19" />  <line x1="5" y1="12" x2="19" y2="12" /></svg>
                        </a>
                        <button id='get-qrcode' class='border'>
                        <svg class="h-6 w-6 text-indigo-500"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v1m6 11h2m-6 0h-2v4m0-11v3m0 0h.01M12 12h4.01M16 20h4M4 12h4m12 0h.01M5 8h2a1 1 0 001-1V5a1 1 0 00-1-1H5a1 1 0 00-1 1v2a1 1 0 001 1zm12 0h2a1 1 0 001-1V5a1 1 0 00-1-1h-2a1 1 0 00-1 1v2a1 1 0 001 1zM5 20h2a1 1 0 001-1v-2a1 1 0 00-1-1H5a1 1 0 00-1 1v2a1 1 0 001 1z"/>
                        </svg>
                        <button id="edit" class='border'>
                            <svg class="h-6 w-6 hover:text-green-500 text-indigo-500"  viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <path d="M9 7 h-3a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-3" />  <path d="M9 15h3l8.5 -8.5a1.5 1.5 0 0 0 -3 -3l-8.5 8.5v3" />  <line x1="16" y1="5" x2="19" y2="8" /></svg>
                        </button>
                        <button id="delete" class='border'>
                        <svg class="h-6 w-6 hover:text-green-500 text-indigo-500"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <line x1="18" y1="6" x2="6" y2="18" />  <line x1="6" y1="6" x2="18" y2="18" /></svg>
                        </button>
                    </div>

                <h1 class="text-2xl mb-5 mt-7">Visitor Request Form</h1>
                <p class="font-bold">
                    Visitors to freight management must be pre-approved.
                </p>
                <p>
                    Please submit this form at least one month before inviting someone
                    to visit our project.
                </p>

                <div class="w-full relative h-auto  pt-16 ">
                    <div class="flex  w-auto items-center gap-x-1 mb-14">
                    <p class="text-xs font-bold">Date: </p>
                    <div class="w-auto border-b-2 border-black">
                        <p id="ceatedAt" class="text-xs  w-auto font-semibold  text-left ">
                        </p>
                    </div>
                    </div>

                    <div class=" relative flex justify-start flex-col  w-full mb-3">
                    <div class="flex  w-auto items-center gap-x-1 pb-2  mb-3">
                        <p class="text-xs font-bold ">Name of Representative: </p>
                        <div class="flex-1 border-b-2 border-black">
                        <p id="rep-name" class="text-xs  w-auto font-semibold  text-left ">
                        </p>
                        </div>
                    </div>
                    <div class="flex gap-x-4 w-full ">
                        <div class="flex  w-full items-center gap-x-1 pb-2">
                        <p class="text-xs font-bold ">Phone number: </p>
                        <div class="flex-1 border-b-2 border-black">
                            <p  id="contact" class="text-xs  w-auto font-semibold  text-left ">
                            </p>
                        </div>
                        </div>
                        <div class="flex  w-full items-center gap-x-1 pb-2">
                        <p class="text-xs font-bold ">Email: </p>
                        <div class="flex-1 border-b-2 border-black">
                            <p  id="email" class="text-xs  w-auto font-semibold  text-left ">
                            </p>
                        </div>
                        </div>
                    </div>
                    </div>

                    <div class="relative flex justify-start flex-col  w-full">
                    <div class="flex gap-x-4 w-full ">
                        <div class="flex  w-full items-center gap-x-1 pb-2">
                        <p class="text-xs font-bold ">Date of Visit & Time: </p>
                        <div class="w-auto border-b-2 border-black">
                            <p  id="date-visit"  class="text-xs  w-auto font-semibold  text-left ">
                            </p>
                        </div>
                        </div>
                    </div>
                    </div>

                    <div class='mt-3 relative w-full h-auto ' >
                        <p class='text-xs font-bold mb-2'>Participants</p>
                        <ul id="parent-container" class='list-disc ml-5'>
                        </ul>
                    </div>

                    <div class="relative w-full h-auto mb-14">
                    <div class="block gap-x-4 w-full   mt-14">
                        <div class="flex flex-col flex-wrap w-full  gap-x-1 pb-2">
                        <p class="text-xs font-bold pb-2">Purpose of Visit: </p>
                        <div class="ml-14 flex-1 border-b-2 border-black">
                            <p id="purpose" class="text-xs   w-auto font-semibold  text-left ">
                            </p>
                        </div>
                        </div>
                        <div class="block  w-full items-center gap-x-1 ">
                        <div class="flex-1 border-b-2 border-black pb-2">
                            <p class="text-xs h-[1px]  w-auto font-semibold  text-left "></p>
                        </div>
                        <div class="flex-1 border-b-2 border-black pb-2">
                            <p class="text-xs h-[7px]  w-auto font-semibold  text-left "></p>
                        </div>
                        </div>
                    </div>
                    </div>

                    <div class="flex gap-x-4 w-full ">
                    <div class="flex  w-full items-center gap-x-1 pb-2">
                        <p class="text-xs font-bold ">From: </p>
                        <div class="flex-1 border-b-2 border-black">
                        <p id="country" class="text-xs  w-auto font-semibold  text-left ">
                        </p>
                        </div>
                    </div>
                    <div class="flex flex wrap w-full items-center gap-x-1 pb-2">
                        <p  class="text-xs font-bold ">Address: </p>
                        <div class="flex-1 border-b-2 border-black">
                        <p  id="address" class="text-xs  w-auto font-semibold  text-left ">
                        </p>
                        </div>
                    </div>
                    </div>
                    <p id="address-continue" class="text-xs  w-auto font-semibold  text-left underline">
                    </p>
                </div>
                    
                </div>
            </div>

        </div>
    </div>
</main>

<script>
 function convertTime(value){
   const time = value.split(':')[0]
   const sec = value.split(':')[1]
    let dayShift = 'AM'
    let returnFormat = ''
    const currentTime = parseInt(time);
    if(currentTime > 12){
      dayShift = 'PM'
    }
    if(currentTime === 13){
        return `0${1}:${sec} ${dayShift}`
    }else if(currentTime === 14){
        return `0${2}:${sec} ${dayShift}`
    }else if(currentTime === 15){
        return `0${3}:${sec} ${dayShift}`
    }else if(currentTime === 16){
        return `0${4}:${sec} ${dayShift}`
    }else if(currentTime === 17){
        return `0${5}:${sec} ${dayShift}`
    }else if(currentTime === 18){
        return `0${6}:${sec} ${dayShift}`
    }else if(currentTime === 19){
        return `0${7}:${sec} ${dayShift}`
    }else if(currentTime === 20){
        return `0${8}:${sec} ${dayShift}`
    }else if(currentTime === 21){
        return `0${9}:${sec} ${dayShift}`
    }else if(currentTime === 22){
        return `${10}:${sec} ${dayShift}`
    }else if(currentTime === 23){
        return `${11}:${sec} ${dayShift}`
    }else if(currentTime === 24){
        return `${12}:${sec} ${dayShift}`
    }else{
      return `${value} ${dayShift}`
    }
  }
</script>
<script>
    function getElementById(id){
        return document.querySelector(`#${id}`)
    }
    function variables(){
        return {
            createdAt:getElementById('ceatedAt'),
            repName:getElementById('rep-name'),
            contact:getElementById('contact'),
            email:getElementById('email'),
            dateVisit:getElementById('date-visit'),
            purpose:getElementById('purpose'),
            country:getElementById('country'),
            address:getElementById('address'),
            addressContinue:getElementById('address-continue'),
            participantContainer:getElementById('parent-container'),
            editTag:getElementById('edit'),
            deleteTag:getElementById('delete'),
            status:getElementById('status')
        }
    }

</script>

<script>
  
    function display(response){
        const visitorAppointment = response.appointment
        const {
            createdAt,
            repName,
            contact,
            email,
            dateVisit,
            purpose,
            country,
            address,
            addressContinue,
            participantContainer,
            editTag,
            deleteTag,
            status
         } =  variables()
         console.log(response)

         const createdAtText = new Date(parseInt(visitorAppointment.createdAt) * 1000).toLocaleString().split(",")[0]
         const dateVisitText = new Date(parseInt( visitorAppointment['date-visit']) * 1000).toLocaleString()
         createdAt.textContent = createdAtText
         repName.textContent = visitorAppointment.fullname
         contact.textContent = '0'+visitorAppointment['mb-number']
         email.textContent = visitorAppointment.email
         dateVisit.textContent = `${visitorAppointment['date-visit']}, ${convertTime(visitorAppointment['time-visit'])}`
         purpose.textContent = visitorAppointment.purpose
        country.textContent = visitorAppointment.country
        address.textContent = visitorAppointment.address.slice(0, 15)
        addressContinue.textContent = visitorAppointment.address.slice(15, 2000)
        status.textContent = visitorAppointment.status
        status.className=`absolute border top-2 right-2 p-1 rounded-sm uppercase text-xs ${visitorAppointment.status.trim() === "under review" ? "border-amber-500 text-amber-700" : visitorAppointment.status.trim() === "declined" ? "border-red-500 text-red-700" : "border-green-500 text-green-700"}`
    if(response.participants){
        response.participants.forEach(data => {
        const  paticipantsTag =document.createElement('li')
        paticipantsTag.className = "text-xs font-semibold" 
        paticipantsTag.textContent =  data.fullname
        participantContainer.append(paticipantsTag  )
    });
    }
     if(visitorAppointment.status.trim() === "approved"){
        $('#get-qrcode').click(function(){
          window.location.href =`/freight/administrative/visitor-dashboard/appointment-request/qr-code/${visitorAppointment.visitor_request_id}`
        })
     }else{
        $('#get-qrcode').hide()
     }
      if(visitorAppointment.status.trim() !== "under review"){
        $('#edit').remove()
        deleteTag.remove()
      }else{
        $('#edit').click(function(){
            window.location.href = `/freight/administrative/admin/visitor-management-dashboard/appointment-request/edit/${visitorAppointment.visitor_id}&${visitorAppointment.visitor_request_id}`
        })
        $('#delete').click(function(){  
          Swal.fire({
              title: "Are you sure?",
              text: "You won't be able to revert this!",
              icon: "warning",
              showCancelButton: true,
              confirmButtonColor: "#3085d6",
              cancelButtonColor: "#d33",
              confirmButtonText: "Yes, delete it!",
            }).then((result) => {
              if (result.isConfirmed) {
                window.location.href = `/freight/administrative/admin/visitor-management-dashboard/appointment-request/delete/${visitorAppointment.visitor_id}&${visitorAppointment.visitor_request_id}`
              }
            });
        })
      }


   }
</script>

<script>

const visitorRequestId  = {visitorRequestId:"<?php echo $visitor_management_request_id ?>"}
    $.ajax({
    type: "POST",
    url:'/freight/get-visitors-request-appointment-by-id',
    data: visitorRequestId,
    dataType: "json",
    success: (res)=>{
        console.log(res)
        if(!res.appointment){
                window.location.href = "/freight/page-404"                
                return 
        }
        display(res)
    }
    });
</script>
<?php
include( $_SERVER['DOCUMENT_ROOT'].'/freight/views/Administrative/layout/footer-setup-administrative.php');
?>

