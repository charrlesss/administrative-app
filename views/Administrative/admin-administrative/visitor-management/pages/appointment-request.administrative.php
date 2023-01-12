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
            <div class=" sm:h-[calc(100%-65px)] h-[600px] w-full  mt-16 -z-[50]" onclick='closekAction()'>
         

                 <div  class="flex flex-col h-full w-full ">
                        <div class='mt-5 px-5 md:w-[500px] w-full'>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                            </div>
                            <input id='search' type="search" id="default-search" class="outline-none block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search" required>
                        </div>
                        </div>
                        <div  class="flex flex-col h-full w-full ">
                            <div id='root' class="overflow-x-auto sm:-mx-6 lg:-mx-8 h-full"  >
                             </div>
                        </div>
                    </div>
                </div> 
            </div>

        </div>
    </div>
</main>


<script src="/freight/views/js/table-ui.js" ></script>

<script>
   
   function filterLogicCallback(data,input){
      return  (
        data.fullname.toLowerCase().search(input.toLowerCase()) >= 0 ||
      data.mb_number.toLowerCase().search(input.toLowerCase()) >= 0 ||
      data.email.search(input.toLowerCase()) >= 0
      );
   }

   function comparisonLogicCallback(a,b){
    return (
      a.fullname.localeCompare(b.fullname) ||
      a.mb_number.localeCompare(b.mb_number) ||
      a.email.localeCompare(b.email)
    );
   }
</script>
<script>
    let handleStatus = 'under-review'
        const  headerArray =  [
            {title:'User',
            icon:`<svg class="h-6 w-6 text-indigo-500"  fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/></svg>`,},
            {title:'Contact',icon:`<svg class="h-6 w-6 text-indigo-500"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <path d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2" /></svg>`},
            {title:'Date & Time Visit',icon:`<svg class="h-6 w-6 text-indigo-500"  fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>`},
            {title:handleStatus === 'under-review' ?  'Under Review' : handleStatus.charAt(0).toUpperCase() + handleStatus.slice(1) ,icon:`<svg class="h-6 w-6 text-indigo-500"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <path d="M10 3.2a9 9 0 1 0 10.8 10.8a1 1 0 0 0 -1 -1h-3.8a4.1 4.1 0 1 1 -5 -5v-4a.9 .9 0 0 0 -1 -.8" />  <path d="M15 3.5a9 9 0 0 1 5.5 5.5h-4.5a9 9 0 0 0 -1 -1v-4.5" /></svg>`},
            {title:'Active',icon:`<svg class="h-6 w-6 text-indigo-500"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <polyline points="21 12 17 12 14 20 10 4 7 12 3 12" /></svg>`},
            {title:'IN',icon:`<svg class="h-6 w-6 text-indigo-500"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4" />  <polyline points="10 17 15 12 10 7" />  <line x1="15" y1="12" x2="3" y2="12" /></svg>`},
            {title:'OUT',icon:`<svg class="h-6 w-6 text-indigo-500"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <path d="M11 7h-5a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-5" />  <line x1="10" y1="14" x2="20" y2="4" />  <polyline points="15 4 20 4 20 9" /></svg>`},
            {title:'Action',icon:``}
        ]
        const root = document.getElementById('root');
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
    function approvedCLick(vm_id,v_id,id){
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, Approved it!'
            }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire(
                'Approved!',
                'Your file has been Approved.',
                'success'
                ).then(()=>{
                    $.ajax({
                        type: "POST",
                        url: '/freight/update-request-status',
                        data: ({visitorManagementRequestId:vm_id,visitorRequestId:v_id,status:'approved',visitor_id:id}),
                        dataType: 'json',
                        success: (res)=>{
                            init(
                            {url:`/freight/get-all-visitors-request-appointment-active/${handleStatus}`},
                            {headerArray},
                            root,
                            {displayData:displayData},
                            filterLogicCallback,
                            comparisonLogicCallback
                            )
                        }
                    })
                })
            }
        })
    
    }

    function declinedCLick(vm_id,v_id,id){

        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, Declined it!'
            }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire(
                'Declined!',
                'Your file has been Declined.',
                'success'
                ).then(()=>{
                    $.ajax({
                        type: "POST",
                        url: '/freight/update-request-status',
                        data: ({visitorManagementRequestId:vm_id,visitorRequestId:v_id,status:'declined',visitor_id:id}),
                        dataType: 'json',
                        success: (res)=>{
                            console.log(res)
                            init(
                            {url:`/freight/get-all-visitors-request-appointment-active/${handleStatus}`},
                            {headerArray},
                            root,
                            {displayData:displayData},
                            filterLogicCallback,
                            comparisonLogicCallback
                            )
                        },
                        error:function(e,er,err){
                            console.log(e,er,err)
                        }
                    })
                })
            }
        })

    }
   
    function underReviewCLick (vm_id,v_id,id){
        $.ajax({
            type: "POST",
            url: '/freight/update-request-status',
            data: ({visitorManagementRequestId:vm_id,visitorRequestId:v_id,status:'under review',visitor_id:id}),
            dataType: 'json',
            success: (res)=>{
                init(
                {url:`/freight/get-all-visitors-request-appointment-active/${handleStatus}`},
                {headerArray},
                root,
                {displayData:displayData},
                filterLogicCallback,
                comparisonLogicCallback
                )
            }
        })
    }
    function viewRequest(vm_id,v_id){
         window.location.href = `/freight/administrative/admin/visitor-management-dashboard/appointment-request/view/${v_id}`
    }
    function editRequest(v_id,vrq_id){
        window.location.href = `/freight/administrative/admin/visitor-management-dashboard/appointment-request/edit/${v_id}&${vrq_id}`
    }
    function deleteRequest(v_id,vrq_id){
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, Delete it!'
            }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = `/freight/administrative/admin/visitor-management-dashboard/appointment-request/delete/${v_id}&${vrq_id}`
            }
        })

    }
    function onClickAction(idx,e){
        e.addEventListener('click',(e)=>{
            e.stopPropagation();
        });
        const elements = [...document.querySelectorAll('#action-container')];
        elements.forEach((el,index)=>{
            if(index ===idx){
                el.classList.toggle('hidden')
            }else{
                el.classList.add('hidden')
            }
        })
    }
    function closekAction(){
        [...document.querySelectorAll('#action-container')].forEach((el,index)=>{
                el.classList.add('hidden')
        })
    }

    

    function displayData(res){
        let html = ''
      res.forEach((data,idx) => {
        
            const url = '<?php echo $GLOBALS['url']."/assets/profile/" ?>'
                    html += `
                    <tr id='dataRow' onclick='closekAction()'
                    class="z-[100] bg-white border-b transition duration-100 ease-in-out hover:bg-gray-100 -z-[100]">
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                            <div class='flex gap-x-2'>
                                <img
                                    class="p-1 md:w-8 md:h-8 w-6 h-6 rounded-full ring-2  ring-indigo-300 dark:ring-indigo-500"
                                    src="${url}${data.profile}"
                                    alt="logo"
                                />
                                <div>
                                    <p>${data.fullname}</p>
                                    <p class='text-gray-400'>${data.email}</p>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">${data['mb-number']}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">${data['date-visit']+", "+convertTime(data['time-visit'])}</td> 
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 ${data.status === 'under review' ? "text-orange-400" : data.status === 'declined' ?"text-red-500" :"text-green-500"}">${data.status}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 "><div class='w-3 h-3 rounded-full ${data.docu_status === 'deactive' ? "bg-red-500" : "bg-green-500"}'></td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">${data.date_time_in ? data.date_time_in :"---"}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">${data.date_time_out ? data.date_time_out :"---"}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900" onclick='onClickAction(${idx},this)'>
                            <div class='relative' onclick='onClickAction(${idx},this)' >
                                <svg onclick='onClickAction(${idx},this)' class="h-8 w-8 text-indigo-500 cursor-pointer "  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <circle cx="12" cy="12" r="1" />  <circle cx="12" cy="19" r="1" />  <circle cx="12" cy="5" r="1" /></svg>
                                    <div id='action-container' class='hidden flex flex-col shadow-lg absolute bg-white z-[100]'>
                                        <p class='cursor-pointer hover:bg-gray-200 px-4 py-2 z-[100] ' onclick='viewRequest(${data["appointment-request-visitor-management_id"]},${data['visitor_request_id']})'>View</p>
                                        ${data.docu_status === 'active' && data.status !== 'approved' && data.status !== 'declined' ? `<p class='cursor-pointer hover:bg-gray-200 px-4 py-2 z-[100]' onclick='approvedCLick(${data["appointment-request-visitor-management_id"]},${data['visitor_request_id']},${data['visitor_id']})'>Approved</p>` :''}
                                        ${data.docu_status === 'active' &&  data.status !=='approved' && data.status !== 'declined' && data.status !== 'under review' ? `<p class='cursor-pointer hover:bg-gray-200 px-4 py-2 z-[100]' onclick='underReviewCLick(${data["appointment-request-visitor-management_id"]},${data['visitor_request_id']},${data['visitor_id']})'>Under Review</p>` :''}
                                        ${data.docu_status === 'active' && data.status !=='approved' && data.status !== 'declined' ? `<p class='cursor-pointer hover:bg-gray-200 px-4 py-2 z-[100]'  onclick='declinedCLick(${data["appointment-request-visitor-management_id"]},${data['visitor_request_id']},${data['visitor_id']})'>Declined</p>` :''}
                                        ${data.docu_status === 'active'  && data.status !=='approved' && data.status !== 'declined' ? `<p class='cursor-pointer hover:bg-gray-200 px-4 py-2 z-[100]' onclick='editRequest(${data["visitor_id"]},${data['visitor_request_id']})'>Edit</p>` :''}
                                        <p class='cursor-pointer hover:bg-gray-200 px-4 py-2 z-[100]' onclick='deleteRequest(${data["visitor_id"]},${data['visitor_request_id']})'>Delete</p>
                                    </div>
                            </div>
                        </td> 
                    </tr>
                `
        });
        return html
    }
</script>
<script>
    let effectClick = false
    function sortByUser(arr,cb){
        cb(arr.sort(function (a, b) {
            return (
              a.fullname.trim().localeCompare(b.fullname.trim())
            );
        }))
    }

    function sortByContact(arr,cb){
        cb(arr.sort(function (a, b) {
            return (
              b['mb-number'].localeCompare(a['mb-number'])
            );
        }))
    }
    function sortByDateTime(arr,cb){
        cb(arr.sort(function (a, b) {
            return (
              a['date-visit'].localeCompare(b['date-visit'])
            );
        }))
    }
   
    function handleActive_DeactiveRequest(e){
        if(e.id ==='Active'){
                init(
                   {url:`/freight/get-all-visitors-request-appointment-deactive`},
                    {headerArray: [
                            {title:'User',
                            icon:`<svg class="h-6 w-6 text-indigo-500"  fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/></svg>`,},
                            {title:'Contact',icon:`<svg class="h-6 w-6 text-indigo-500"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <path d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2" /></svg>`},
                            {title:'Date & Time Visit',icon:`<svg class="h-6 w-6 text-indigo-500"  fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>`},
                            {title:'Any',icon:`<svg class="h-6 w-6 text-indigo-500"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <path d="M10 3.2a9 9 0 1 0 10.8 10.8a1 1 0 0 0 -1 -1h-3.8a4.1 4.1 0 1 1 -5 -5v-4a.9 .9 0 0 0 -1 -.8" />  <path d="M15 3.5a9 9 0 0 1 5.5 5.5h-4.5a9 9 0 0 0 -1 -1v-4.5" /></svg>`},
                            {title:'Deactive',icon:`<svg class="h-6 w-6 text-indigo-500"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <polyline points="21 12 17 12 14 20 10 4 7 12 3 12" /></svg>`},
                            {title:'IN',icon:`<svg class="h-6 w-6 text-indigo-500"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4" />  <polyline points="10 17 15 12 10 7" />  <line x1="15" y1="12" x2="3" y2="12" /></svg>`},
                            {title:'OUT',icon:`<svg class="h-6 w-6 text-indigo-500"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <path d="M11 7h-5a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-5" />  <line x1="10" y1="14" x2="20" y2="4" />  <polyline points="15 4 20 4 20 9" /></svg>`},
                            {title:'Action',icon:``}
                        ]},
                    root,
                    {displayData:displayData},
                    filterLogicCallback,
                    comparisonLogicCallback
                )
            return
        }
        if(e.id ==='Deactive'){
                init(
                   {url:`/freight/get-all-visitors-request-appointment-active/under-review`},
                    {headerArray},
                    root,
                    {displayData:displayData},
                    {displayData:displayData},
                    filterLogicCallback,
                    comparisonLogicCallback
                )
            return
        }

    }
    
    function getDataByStatus(e){
        // 
       
        if(e.id === 'Under Review'){
        init(
           {url:"/freight/get-all-visitors-request-appointment-status/approved"},
            {headerArray: [
                {title:'User',
                icon:`<svg class="h-6 w-6 text-indigo-500"  fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/></svg>`,},
                {title:'Contact',icon:`<svg class="h-6 w-6 text-indigo-500"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <path d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2" /></svg>`},
                {title:'Date & Time Visit',icon:`<svg class="h-6 w-6 text-indigo-500"  fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>`},
                {title:'Approved',icon:`<svg class="h-6 w-6 text-indigo-500"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <path d="M10 3.2a9 9 0 1 0 10.8 10.8a1 1 0 0 0 -1 -1h-3.8a4.1 4.1 0 1 1 -5 -5v-4a.9 .9 0 0 0 -1 -.8" />  <path d="M15 3.5a9 9 0 0 1 5.5 5.5h-4.5a9 9 0 0 0 -1 -1v-4.5" /></svg>`},
                {title:'Active',icon:`<svg class="h-6 w-6 text-indigo-500"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <polyline points="21 12 17 12 14 20 10 4 7 12 3 12" /></svg>`},
                {title:'IN',icon:`<svg class="h-6 w-6 text-indigo-500"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4" />  <polyline points="10 17 15 12 10 7" />  <line x1="15" y1="12" x2="3" y2="12" /></svg>`},
                {title:'OUT',icon:`<svg class="h-6 w-6 text-indigo-500"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <path d="M11 7h-5a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-5" />  <line x1="10" y1="14" x2="20" y2="4" />  <polyline points="15 4 20 4 20 9" /></svg>`},
                {title:'Action',icon:``}
            ]},
            root,
            {displayData:displayData},
                filterLogicCallback,
                comparisonLogicCallback
            )
        }else if(e.id === 'Approved'){
            init(
           {url: "/freight/get-all-visitors-request-appointment-status/declined"},
            {headerArray: [
                {title:'User',
                icon:`<svg class="h-6 w-6 text-indigo-500"  fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/></svg>`,},
                {title:'Contact',icon:`<svg class="h-6 w-6 text-indigo-500"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <path d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2" /></svg>`},
                {title:'Date & Time Visit',icon:`<svg class="h-6 w-6 text-indigo-500"  fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>`},
                {title:'Declined',icon:`<svg class="h-6 w-6 text-indigo-500"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <path d="M10 3.2a9 9 0 1 0 10.8 10.8a1 1 0 0 0 -1 -1h-3.8a4.1 4.1 0 1 1 -5 -5v-4a.9 .9 0 0 0 -1 -.8" />  <path d="M15 3.5a9 9 0 0 1 5.5 5.5h-4.5a9 9 0 0 0 -1 -1v-4.5" /></svg>`},
                {title:'Active',icon:`<svg class="h-6 w-6 text-indigo-500"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <polyline points="21 12 17 12 14 20 10 4 7 12 3 12" /></svg>`},
                {title:'IN',icon:`<svg class="h-6 w-6 text-indigo-500"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4" />  <polyline points="10 17 15 12 10 7" />  <line x1="15" y1="12" x2="3" y2="12" /></svg>`},
                {title:'OUT',icon:`<svg class="h-6 w-6 text-indigo-500"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <path d="M11 7h-5a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-5" />  <line x1="10" y1="14" x2="20" y2="4" />  <polyline points="15 4 20 4 20 9" /></svg>`},
                {title:'Action',icon:``}
            ]},
            root,
            {displayData:displayData},
                filterLogicCallback,
                comparisonLogicCallback
            )
        }else if(e.id === 'Declined'){
            init(
           {url:"/freight/get-all-visitors-request-appointment-status/under-review"},
            { headerArray: [
            {title:'User',
            icon:`<svg class="h-6 w-6 text-indigo-500"  fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/></svg>`,},
            {title:'Contact',icon:`<svg class="h-6 w-6 text-indigo-500"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <path d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2" /></svg>`},
            {title:'Date & Time Visit',icon:`<svg class="h-6 w-6 text-indigo-500"  fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>`},
            {title:'Under Review',icon:`<svg class="h-6 w-6 text-indigo-500"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <path d="M10 3.2a9 9 0 1 0 10.8 10.8a1 1 0 0 0 -1 -1h-3.8a4.1 4.1 0 1 1 -5 -5v-4a.9 .9 0 0 0 -1 -.8" />  <path d="M15 3.5a9 9 0 0 1 5.5 5.5h-4.5a9 9 0 0 0 -1 -1v-4.5" /></svg>`},
            {title:'Active',icon:`<svg class="h-6 w-6 text-indigo-500"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <polyline points="21 12 17 12 14 20 10 4 7 12 3 12" /></svg>`},
            {title:'IN',icon:`<svg class="h-6 w-6 text-indigo-500"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4" />  <polyline points="10 17 15 12 10 7" />  <line x1="15" y1="12" x2="3" y2="12" /></svg>`},
            {title:'OUT',icon:`<svg class="h-6 w-6 text-indigo-500"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <path d="M11 7h-5a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-5" />  <line x1="10" y1="14" x2="20" y2="4" />  <polyline points="15 4 20 4 20 9" /></svg>`},
            {title:'Action',icon:``}
        ]},
            root,
            {displayData:displayData},
                filterLogicCallback,
                comparisonLogicCallback
            )
        }else if(e.id === 'Any') {
            init(
           {url: `/freight/get-all-visitors-request-appointment-active/${handleStatus}`},
            {headerArray},
            root,
            {displayData:displayData},
                filterLogicCallback,
                comparisonLogicCallback
            )
        }
    }


    function sortedBy(e,arr,cb){
        e.addEventListener('click',(e)=>{
            e.stopPropagation();
        });
        if(e.parentElement.parentElement.children[3].querySelector(`th div`).id == 'Under Review'){
            handleStatus = 'under-review'
        }else{
            handleStatus = e.parentElement.parentElement.children[3].querySelector(`th div`).id.toLowerCase()
        }
        if(e.id === 'User'){
            return sortByUser(arr,cb)
        }else if(e.id === 'Contact'){
            return sortByContact(arr,cb)
        }else if(e.id === 'DATE & TIME VISIT'){
            return sortByDateTime(arr,cb)
        }else if(e.id === 'Active'){
            return handleActive_DeactiveRequest(e)
        }else if(e.id === 'Deactive'){
            return handleActive_DeactiveRequest(e)
        }else if(e.id === 'Under Review'){
            getDataByStatus(e)
        }else if(e.id === 'Approved'){
            getDataByStatus(e)
        }else if(e.id === 'Declined'){
            getDataByStatus(e)
        }else if(e.id === 'Any'){
            getDataByStatus(e)
        }

    }
</script>
<script>
 
init(
    {url:`/freight/get-all-visitors-request-appointment-active/${handleStatus}`},
      {headerArray},
      root,
      {displayData:displayData},
    filterLogicCallback,
    comparisonLogicCallback
      )
</script>
<?php
include( $_SERVER['DOCUMENT_ROOT'].'/freight/views/Administrative/layout/footer-setup-administrative.php');
?>
