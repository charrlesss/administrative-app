<div class="flex gap-x-5 items-end">
    <p class="mb-5 text-1xl text-indigo-500 font-semibold uppercase">Your Request Appointment</p>
    <div  id="add-new-request" class=" w-auto h-auto flex justify-start items-center mb-4 ">
            <a href="/freight/administrative/visitor-dashboard/appointment-request" class=" border-dashed border-2 px-4 py-2 block uppercase text-xs flex gap-x-2 items-center rounded-xl">
                <p class="text-indigo-500 font-semibold">new</p>
                <svg class="h-5 w-5 text-indigo-500"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 14v6m-3-3h6M6 10h2a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v2a2 2 0 002 2zm10 0h2a2 2 0 002-2V6a2 2 0 00-2-2h-2a2 2 0 00-2 2v2a2 2 0 002 2zM6 20h2a2 2 0 002-2v-2a2 2 0 00-2-2H6a2 2 0 00-2 2v2a2 2 0 002 2z"/>
                </svg>
            </a>
          
    </div> 
</div>
<div class=" w-full h-[calc(100%-40px)] relative ">
        <div class="block relative w-full h-[calc(100%-50%)]"> 
            <div class="w-full  xl:h-full h-[330px]  border-x-[1px]   border-b-[1px]  overflow-y-scroll lg:overflow-x-hidden "> 
    <!-- table  -->
                <div id="content-3"  class=" relative shadow-md  h-full  drop-shadow-xl ">
                </div>
        </div>    
    <!-- facility iamges -->

                <div class=" w-full h-full relative flex items-center px-3  ">
                    <?php
                    include( $_SERVER['DOCUMENT_ROOT'].'/freight/views/Administrative/visitor-administrative/components/carousel-slider.administrative.php');
                    ?>
                </div>                              
        </div> 
    </div>
</div> 
<script src="/freight/views/js/content-three-request-appoinment.js"></script>


<script>
    initContentThree()
</script>