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
                        <div id='root' class="flex flex-col h-full w-full ">

                        </div>
                    </div>
                </div> 
            </div>

        </div>
    </div>
</main>


<script src="/freight/views/js/table-ui.js" ></script>
<script>
    const dataParent = document.getElementById('tbody-visitor-table')
  
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
            <tr onclick='closekAction()' class="bg-white border-b transition duration-100 ease-in-out hover:bg-gray-100 -z-[100]">
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
                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">${data.mb_number}</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">${new Date(parseInt(data.createdAt) * 1000).toLocaleString()}</td> 
                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900" onclick='onClickAction(${idx},this)'>
                    <div class='relative' onclick='onClickAction(${idx},this)' >
                        <svg onclick='onClickAction(${idx},this)' class="h-8 w-8 text-indigo-500 cursor-pointer "  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <circle cx="12" cy="12" r="1" />  <circle cx="12" cy="19" r="1" />  <circle cx="12" cy="5" r="1" /></svg>
                            <div id='action-container' class='hidden flex flex-col shadow-lg absolute bg-white z-[100]'>
                                <p class='cursor-pointer hover:bg-gray-200 px-4 py-2 z-[100] '>View</p>
                                <p class='cursor-pointer hover:bg-gray-200 px-4 py-2 z-[100]'>Edit</p>
                                <p class='cursor-pointer hover:bg-gray-200 px-4 py-2 z-[100]'>Delete</p>
                                <p class='cursor-pointer hover:bg-gray-200 px-4 py-2 z-[100]'>IN</p>
                                <p class='cursor-pointer hover:bg-gray-200 px-4 py-2 z-[100]'>OUT</p>
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

    function sortByUser(arr,cb){
        console.log('asdasd')
        cb(arr.sort(function (a, b) {
            return (
              a.fullname.trim().localeCompare(b.fullname.trim())
            );
        }))
    }

    function sortByContact(arr,cb){
        cb(arr.sort(function (a, b) {
            return (
              b.mb_number.localeCompare(a.mb_number)
            );
        }))
    }
    function sortByCreated(arr,cb){
        cb(arr.sort(function (a, b) {
            return (
              a.createdAt.localeCompare(b.createdAt)
            );
        }))
    }

    function sortedBy(e,arr,cb){
        clearTimeout(timeout);
        e.addEventListener('click',(e)=>{
            e.stopPropagation();
        });
       
        if(e.id === 'User'){
            return sortByUser(arr,cb)
        }else if(e.id === 'Contact'){
            return sortByContact(arr,cb)
        }else if(e.id === 'Created'){
            return sortByCreated(arr,cb)
        }

    }
</script>
<script>
    const root = document.getElementById('root');
        const  headerArray =  [
            {title:'User',
            icon:`<svg class="h-6 w-6 text-indigo-500"  fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/></svg>`,
            sortData:function (){
                console.log('asdasd')
            }
            },
            {title:'Contact',icon:`<svg class="h-6 w-6 text-indigo-500"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <path d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2" /></svg>`,
                sortData:function (){console.log('asdasd')}},
            {title:'Created',icon:`<svg class="h-6 w-6 text-indigo-500"  fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>`,
                sortData:function (){console.log('asdasd')}},
            {title:'Action',icon:``,sortData:function (){console.log('asdasd')}}
        ]

init(
    "/freight/get-all-visitors-account",
      {headerArray},
      root,
      {displayData:displayData}
      )
</script>
<?php
include( $_SERVER['DOCUMENT_ROOT'].'/freight/views/Administrative/layout/footer-setup-administrative.php');
?>
