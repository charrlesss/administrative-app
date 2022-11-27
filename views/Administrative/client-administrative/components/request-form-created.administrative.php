<div class="flex gap-x-5 items-end">
    <p class="mb-5 text-1xl text-indigo-500 font-semibold uppercase">Your Request Appointment</p>
    <div  id="add-new-request" class=" w-auto h-auto flex justify-start items-center mb-4 ">
            <button class=" border-dashed border-2 px-4 py-2 block uppercase text-xs flex gap-x-2 items-center rounded-xl">
                <p class="text-indigo-500 font-semibold">new</p>
                <svg class="h-5 w-5 text-indigo-500"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 14v6m-3-3h6M6 10h2a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v2a2 2 0 002 2zm10 0h2a2 2 0 002-2V6a2 2 0 00-2-2h-2a2 2 0 00-2 2v2a2 2 0 002 2zM6 20h2a2 2 0 002-2v-2a2 2 0 00-2-2H6a2 2 0 00-2 2v2a2 2 0 002 2z"/>
                </svg>
            </button>
    </div> 
</div>
<div class=" w-full h-[calc(100%-40px)] relative ">
        <div class="block relative w-full h-[calc(100%-50%)]"> 
            <div class="w-full  xl:h-full h-[330px]  border-x-[1px]   border-b-[1px]  overflow-y-scroll lg:overflow-x-hidden "> 
    <!-- table  -->
                <div class=" relative shadow-md  h-full  drop-shadow-xl ">
                <table class=" h-auto w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="relative border-b-[1px]  text-[12px] font-semibold text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr >
                            <th scope="col" class="py-3 px-6">
                                Profile
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Visit
                            </th>
                            <th scope="col" class="py-3 px-6">
                                status
                            </th>
                            <th scope="col" class="py-3 px-6">
                                View
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody  >
                        <!-- <tr class=" w-full bg-gray-50 border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-indigo-100 ">
                            <td class="py-2 px-6  ">qweqwe</td>
                            <td class="py-2 px-6 ">qweqwe</td>
                            <td class="py-2 px-6">qweqwe</td>
                            <td class="py-2 px-6 ">qweqwe</td>
                            <td class="py-2 px-6">qweqwe</td>
                        </tr> -->
                    </tbody>
                </table>
                    <!---  empty -->
                    <div class=" w-full h-[calc(100%-20%)]  flex justify-center items-center relative ">
                        <p class="text-3xl tracking-[2px] border-dotted border-2 border-indigo-500 p-5 rounded-md">Empty</p>
                    </div> 
            
                </div>
        </div>    
    <!-- facility iamges -->

                <div class=" w-full h-full relative flex items-center px-3  ">
                    <?php
                    include( $_SERVER['DOCUMENT_ROOT'].'/freight/views/Administrative/client-administrative/components/carousel-slider.administrative.php');
                    ?>
                </div>                              
        </div> 
    </div>
</div> 