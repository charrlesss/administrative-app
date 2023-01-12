<?php


$users = [
  array(
    "name"  => "Dashboard",
    "icon" => 
    html_entity_decode(
    '<svg class="h-8 w-8 text-indigo-500"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/>
  </svg>
  '),
  "link"=>'/freight/administrative/admin/user-management-dashboard'
    ),
array(
    "name"  => "Profile",
    "icon" => 
    html_entity_decode(
    '<svg class="h-8 w-8 text-indigo-500"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
  </svg>
  '),
  "link"=>'/freight/administrative/admin/user-management-dashboard/profile'
    ), 
  array(
      "name"  => "Create Accounts",
      "icon" => 
      html_entity_decode(
      '<svg class="h-8 w-8 text-indigo-500"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
    </svg>'),
    "link"=>'/freight/administrative/admin/user-management-dashboard/create-account'
  )
];

?>

<div id="sidebar" class="md:block  z-[100] bg-indigo-50 shadow-2xl w-[300px] transition-all h-full border xl:relative absolute transition-all ">
  <div id="sidebar-container" class="bg-indigo-50 transition-all w-full">
      <div class="w-[300px] flex-1 relative flex justify-start mb-5 h-[70px] pl-1 pt-1">
        <div  class="flex-1 mr-1 bg-indigo-50 border-indigo-200  flex overflow-hidden  gap-x-3 items-center border relative px-2 py-2 rounded-xl">
            <img class=" rounded-full w-10 h-10 border border-indigo-600 p-2 outline outline-offset-2 outline-indigo-500" src="<?php echo $GLOBALS['url'].'/assets/img/truck.png'  ?>" alt="logo">
            <p class=" uppercase text-indigo-800 font-semibold text-xs whitespace-nowrap">Freight Visitor Dashboard</p>
        </div>
      <button id="menu-btn" class="cursor-pointer w-auto relative  flex items-center p-1 text-pink-800 hover:text-gray-900 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                <svg class="fill-current h-6 w-6" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                  <title>Menu</title>
                  <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                </svg>
        </button>
      </div>

    <div id="img-container" class=" h-auto flex flex-col justify-center mt-5">
    <div class="w-full h-auto flex  flex-col justify-center mb-10">
        <div class="w-full h-auto flex justify-center">
            <div class="border-2 bg-transparent z-[100] md:w-[200px] md:h-[200px] w-[170px] h-[170px] bg-gray-50 flex overflow-hidden relative  justify-center items-center rounded-full " id="drop-box" >
                    <img
                    class="mx-auto sm:w-48 sm:pt-10 pt-4 w-24"
                    src="
                    <?php 
                $profile = $_SESSION['user-management-account']['profile'] ?  $_SESSION['user-management-account']['profile'] : "profile_default.jpg";
                echo $GLOBALS['url']."/assets/profile/$profile"; 
                ?>"
                alt="logo"
                class=" rounded-full absolute top-[50%] left-[50%] -translate-y-2/4 -translate-x-2/4 min-h-full min-w-full block"
                />
            </div>
        </div>
        <p class="text-center mt-5"><?php echo $_SESSION['user-management-account']['fullname'] ?></p>
    </div>
    <div class="block relative w-full h-auto ">
        <?php
            $i = 0;
            while($i < count($users))
            {
            ?>
                <a href="<?php echo $users[$i]['link']?>" class="flex gap-x-3 items-center cursor-pointer hover:bg-indigo-100  py-2 pl-4">
                    <?php echo $users[$i]['icon'] ?>
                    <p><?php echo $users[$i]['name']?></p>
                </a>
            
            <?php
            $i++;
            }
        ?>

          <button id="logout-btn" class="flex gap-x-3 items-center cursor-pointer hover:bg-indigo-100  py-2 pl-4 w-full">
                <svg class="h-8 w-8 text-indigo-500"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"/>
                </svg>
                      <p>Logout</p>
            <button>
        </div>
        </div>
    </div>
</div>

<div id="burger-menu">
  <span></span>
</div>

<div id="loading" class="flex justify-center items-center  border-5 border-red-500 absolute top-0 bottom-0 left-0 right-0 z-[100] bg-white">
    <div role="status">
        <svg class="inline mr-2 w-8 h-8 text-gray-200 animate-spin dark:text-gray-600 fill-blue-600" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/>
            <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"/>
        </svg>
        <span class="sr-only">Loading...</span>
    </div>
</div>

<script>
   if(window.innerWidth < 1280){
        $('#menu-btn-main').show()
        $('#sidebar').animate({width:"0" ,left:"-100%"},{duration:5})
      }

    $(window).resize(function(){
    if(window.innerWidth < 1280){
        $('#menu-btn-main').show()
        $('#sidebar').animate({width:"0" ,left:"-100%"},{duration:5})
      }
     else{
        $('#menu-btn-main').hide()
        $('#sidebar').animate({width:"300px" ,left:"0"},{duration:5})
      }
    })

</script>

<script>

   $(function(){
    $("#loading").hide()

    const sidebar = $('#sidebar')[0]
    const sidebarContainer = $('#sidebar-container')[0]
 
    $('#menu-btn').click(function(){
        $('#menu-btn-main').show()
        $('#sidebar').animate({width:"0" ,left:"-100%"},{duration:100})
    })

    $('#menu-btn-main').click(function(){
      $('#menu-btn-main').hide()
        $('#sidebar').animate({width:"300px" ,left:"0"},{duration:100})
    })
    

      $("#logout-btn").click(function(e){
        e.preventDefault()
       $("#loading").show()
         $.ajax({
            type: 'get',
            url: '/freight/visitor-management-account-logout',
            success: function (response) {
              $("#loading").hide()
                  Swal.fire({
                    icon: 'success',
                    title: 'Good job!',
                    text:response.message,
                    showConfirmButton: false,
                    timer: 1000
                  }).finally(()=>{
                  window.location.href = response.redirect
                  })
           },  
            error:function(_ , _ ,errorMessage){
            $("#loading").hide()
            clearTimeout(timeout)
              console.log(errorMessage);
            }

          });
      })

    })

    
</script>