<style>
    span.ripples {
  position: absolute;
  background: #cbd5e1;
  transform: translate(-50%, -50%);
  pointer-events: none;
  border-radius: 50%;
  animation: animate 1s linear infinite;
  top:50%;
  left:50%;
  tranform:translate(-50%,-50%);
}
@keyframes animate {
  0% {
    width: 0;
    height: 0;
    opacity: 0.5;
  }
  100% {
    width: 50px;
    height: 50px;
    opacity: 0;
  }
}
</style>
<div class="flex gap-2 p-2 ">
    <button id="menu-btn-main" class="xl:hidden flex cursor-pointer  items-center p-1 text-pink-800 hover:text-gray-900 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
        <svg class="fill-current h-6 wb6" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <title>Menu</title>
            <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
        </svg>
    </button>
    <?php
    if($_SERVER['REQUEST_URI'] !== "/freight/administrative/visitor-dashboard"){
    ?>
    <a href="/freight/administrative/visitor-dashboard">
    <button id="menu-btn-main" class="flex gap-x-2 items-center p-1 text-pink-800 hover:text-gray-900 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
        <svg  class="fill-current h-6 w-6" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
        viewBox="0 0 495.398 495.398" style="enable-background:new 0 0 495.398 495.398;"
        xml:space="preserve">
            <path d="M487.083,225.514l-75.08-75.08V63.704c0-15.682-12.708-28.391-28.413-28.391c-15.669,0-28.377,12.709-28.377,28.391
                v29.941L299.31,37.74c-27.639-27.624-75.694-27.575-103.27,0.05L8.312,225.514c-11.082,11.104-11.082,29.071,0,40.158
                c11.087,11.101,29.089,11.101,40.172,0l187.71-187.729c6.115-6.083,16.893-6.083,22.976-0.018l187.742,187.747
                c5.567,5.551,12.825,8.312,20.081,8.312c7.271,0,14.541-2.764,20.091-8.312C498.17,254.586,498.17,236.619,487.083,225.514z"/>
            <path d="M257.561,131.836c-5.454-5.451-14.285-5.451-19.723,0L72.712,296.913c-2.607,2.606-4.085,6.164-4.085,9.877v120.401
                c0,28.253,22.908,51.16,51.16,51.16h81.754v-126.61h92.299v126.61h81.755c28.251,0,51.159-22.907,51.159-51.159V306.79
                c0-3.713-1.465-7.271-4.085-9.877L257.561,131.836z"/>
            </svg>
            <p class="text-xs">
                Home
            </p>
        </button>
    </a>
    <?php
        }
    ?>
</div>

<div class="flex items-center gap-x-5 py-3">
<div class="w-auto h-auto  p-1  relative">

    <div class=" transition-all duration-500 w-auto h-auto  relative   rounded-full hover:bg-indigo-50" 
    id="notification">
        <div class="absolute -left-[185px] top-5 flex flex-col  hidden " id="notification-messages-container">
            
        <div class="w-5 overflow-hidden inline-block pl-2 absolute left-[170px] shadow-lg">
                <div class=" h-5 w-4 bg-slate-50 rotate-45 transform origin-bottom-left"></div>
            </div>

            <div class="absolute top-5 bg-slate-50 w-[300px] h-[400px] overflow-y-auto overflow-x-hidden shadow-lg relative">
                <div class="flex justify-between p-2 border-b ">
                    <h1 class="font-semibold ">Notifications</h1>
                    <span id="read-all" class="flex gap-x-1 items-center cursor-pointer relative ">
                        <svg class="h-3 w-3 text-blue-500"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14" />  <polyline points="22 4 12 14.01 9 11.01" /></svg>
                        <p class="text-blue-500 text-xs ">Mark as read</p>
                    </span>
                </div>
                <ul id="notification-list"  class="h-auto w-full">
                </ul>
            </div>

        </div>
        <svg class=" cursor-pointer h-5 w-5 text-indigo-500 z-[50]"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9" />  <path d="M13.73 21a2 2 0 0 1-3.46 0" /></svg>                </div>
        <p 
        data-notification-count="10" 
        id="notification-count" 
        class="cursor-pointer absolute  z-[60] text-xs -top-2 left-3 min-w-[1.25rem] min-h-[1.25rem] px-1 flex justify-center items-center rounded-full text-white bg-red-500 "></p>
    </div>

    <a href="/freight/administrative/visitor-dashboard/profile">
    <img
        class=" p-1 w-10 h-10 rounded-full ring-2 ring-indigo-300 dark:ring-indigo-500"
        src="
        <?php 
        $profile = $_SESSION['visitor_account']['profile'];
        echo $GLOBALS['url']."/assets/profile/$profile"; 
        ?>"
    alt="logo"
    class=" rounded-full absolute top-[50%] left-[50%] -translate-y-2/4 -translate-x-2/4 min-h-full min-w-full block"
    />
</a>
</div>

<script src="/freight/views/js/fetch-history.js"></script>

<script>
    const profileImageHeader = "<?php echo $GLOBALS['url']."/assets/img/truck.png"; ?>"
    const notificationCount = $("#notification-count")[0]
</script>

<script>
   function ripplesEffect(e,element){
    let x = e.clientX - e.target.offsetLeft;
    let y = e.clientY - e.target.offsetTop;
    
    let ripples = document.createElement('span');
    ripples.className="ripples"
    // ripples.style.left = (x + y)+ 'px';
    // ripples.style.top = y + 'px';
    element.appendChild(ripples);
    
     setTimeout(() => {
      ripples.remove()
    },1000);
    }
</script>

<script>
    $("#notification").click(function(e){
    $("#notification-messages-container").toggle('hidden')
        ripplesEffect(e,$("#notification")[0])
    })
</script>

<script>
fetchUserHistory()
MarkAllAsRead();
</script>

