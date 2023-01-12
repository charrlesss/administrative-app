<?php
include( $_SERVER['DOCUMENT_ROOT'].'/freight/views/Administrative/layout/header-setup-administrative.php');
?>


<?php
function limitString($string){
    $new_string =  mb_strimwidth($string, 0, 30, "...");
    return     $new_string ;
}
?>

<style>
    .tableFixHead{ overflow: auto; height: 400px; }
.tableFixHead thead th { position: sticky; top: 0; z-index: 1; }

/* Just common table stuff. Really. */
table  { border-collapse: collapse; width: 100%; }
th, td {
    padding-top: 10px;
  padding-right: 0;
  padding-bottom: 10px;
  padding-left: 25px; }
th     { background:#eee; }
</style>

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


<div  class=" w-full h-full  px-10 mt-24 ">

    <div class="w-full relative h-auto flex md:justify-start justify-center ">
        <div class="z-[50] md:w-[200px] md:h-[200px] w-[170px] h-[170px] relative ">
             <div class=" relative bg-transparent z-[50] md:w-[200px] md:h-[200px] w-[170px] h-[170px] bg-gray-50 flex overflow-hidden relative  justify-center items-center rounded-full " id="drop-box" >
                <img
                    id="profile"
                    class="cursor-pointer rounded-full min-h-full min-w-full block"
                    />
                </div>
            </div>
           <div class=" md:flex hidden w-auto h-auto items-center ml-5 ">
                <div class="flex flex-col">
                    <h1 id='profile_fullname' class="text-3xl w-full overflow-hidden whitespace-nowrap	"> </h1>
                    <p  id='profile_country' class="uppercase text-xs font-semibold text-gray-300 tracking-[2px]"></p>
                </div> 
            </div>
    </div>

    <!-- //form     -->
    <section class="w-full  mt-10" >
        <div class="w-full">
            <div class="">
                <div class="col-md-6 mt-5 mb-5">
                    <div class="form-area">
                        <div class="form-inner">
                                <!-- fullname & email -->
                                <div class="flex gap-x-4 w-full h-auto md:flex-row flex-col ">
                                    <div class="form-group der md:mt-2 rounded-lg w-full mb-2">
                                        <p class="text-[11px] uppercase text-indigo-900 font-bold">Full Name</p>
                                        <p id='fullname'></p>
                                    </div>
                                    <div class="form-group  md:mt-2 rounded-lg w-full  mb-2">
                                        <p  class="text-[11px] uppercase text-indigo-900 font-bold">Email</p>
                                        <p id='email'>asdasd</p>
                                    </div>
                                </div>
                                        <!-- country & mobile number -->
                                <div class="flex gap-x-4 w-full h-auto md:flex-row flex-col ">
                                        <div class="form-group   w-full  mb-2">
                                            <p for="countries" class="text-[11px] uppercase text-indigo-900 font-bold">Mobile Number</p>
                                            <p id='contact_number'>asdasd</p>
                                        </div>

                                        <div class="form-group der rounded-lg w-full h-auto  mb-2">
                                            <p  class="text-[11px] uppercase text-indigo-900 font-bold">Country</p>
                                            <p id='country' >sdad</p>
                                        </div>
                                </div>
                                <div  class="flex gap-x-4 w-full h-auto md:flex-row flex-col ">
                                    <div  class="form-group  w-full  mb-2"  id="bd-container" >
                                        <p  class="text-[11px] uppercase text-indigo-900 font-bold">Birth Date</p> 
                                        <p id='birthdate'>asd</p>
                                    </div>

                                    <div class="form-group w-full  mb-2">
                                        <p for="address" class="text-[11px] uppercase text-indigo-900 font-bold">Address</p> 
                                        <p id='address' >asdasd</p>
                                    </div>
                            </div>
                            

                            <div  class="form-group flex  gap-x-3 items-center ">
                                        <div class="flex gap-x-4 w-full h-auto flex-col ">
                                            <p  class=" text-[11px] uppercase text-indigo-900 font-bold" >Gender</p>
                                            <p id='gender'  >asdasd</p>
                                        </div>
                                    
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
                <div class="relative pt-5  rounded-b ">
                <p class='text-2xl font-semibold mb-10'>History</p>
                <div class="tableFixHead">
                <table>
                <thead class=" text-left  text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col">
                                Login
                            </th>
                            <th scope="col">
                                Logout
                            </th>
                            <th scope="col">
                                Update Profile
                            </th>
                        </tr>
                    </thead>
                    <tbody id='table-log'>
                    </tbody >
                </table>
                </div>
            </div>
        </div>  
    </section>
</div>
<div id="loading-update-profile" class="flex justify-center items-center  border-5 border-red-500 absolute top-0 bottom-0 left-0 right-0 z-[100] bg-white">
    <div role="status">
        <svg class="inline mr-2 w-8 h-8 text-gray-200 animate-spin dark:text-gray-600 fill-blue-600" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/>
            <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"/>
        </svg>
        <span class="sr-only">Loading...</span>
    </div>
</div>


    </div>
    </div>
</main>



<script>
    $("#loading-update-profile").hide()
    const url = "<?php echo $GLOBALS['url']."/assets/profile/" ?>"
</script>

<script>
    function displayText(id,value){
        if(id === "profile"){
            console.log(url+value)
        document.getElementById(id).src = url+value
            return
        }
        document.getElementById(id).textContent= value
    }
    function displayInfo(res){
        if(res.visitor.length <= 0){
            return 
        }
        
        const { profile,fullname,email,mb_number,gender,address,birthdate,country,createdAt,...data} = res.visitor[0]
        
        displayText("profile_fullname",fullname)
        displayText("profile_country",country)
        displayText("fullname",fullname)
        displayText("email",email)
        displayText("contact_number",mb_number)
        displayText("address",address)
        displayText("gender",gender)
        displayText("country",country)
        displayText("profile",profile)

        const tableLog =  document.getElementById('table-log')
        let tableDataText = ""
        const maximumLength = Math.max(res.login.length, res.logout.length, res.update.length);
        for (let index = 0; index < maximumLength; index++) {
           const login =  res.login[index]?.loginAt
           const logout =  res.logout[index]?.logoutAt
           const update =  res.update[index]?.updateAt
            tableDataText += `
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <td class="px-6 py-4 text-sm font-semibold ">
                    ${login ? new Date(parseInt(login) * 1000).toLocaleString() :''}
                </td>
                <td class="px-6 py-4 text-sm font-semibold ">
                  ${logout ? new Date(parseInt(logout) * 1000).toLocaleString() :''}
                </td>
                <td class="px-6 py-4 text-sm font-semibold ">
                    ${update ? new Date(parseInt(update) * 1000).toLocaleString() :''}
                </td>
            </tr>
            `
            
        }
        tableLog.innerHTML = tableDataText

    }
</script>

 <script>
    
        $.ajax({
        type: 'post',
        url: '/freight/get-visitor-from-id',
        dataType:'json',
        data: ({visitor_id:"<?php echo $visitor_id ?>"}),
        success:function(res){
            console.log(res)
            displayInfo(res.visitor)

        },
        error:(_,__,___)=>{
            console.log(_,__,___)
        }
    })  
   

</script> 




<?php
include( $_SERVER['DOCUMENT_ROOT'].'/freight/views/Administrative/layout/footer-setup-administrative.php');
?>



  
