<?php
include( $_SERVER['DOCUMENT_ROOT'].'/freight/views/Administrative/layout/header-setup-administrative.php');
   
?>
    <script src=
"https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" >
    </script>
    <script src=
"https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" >
    </script>
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
/>
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@3.8.0/dist/chart.js"></script>
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
            <div id="visitor-header" class="absolute bg-white z-[60] top-0 r-0 l-0  w-full shadow-lg">
                <div  class="flex justify-between  pl-3 xl:pr-20 pr-10 items-center">
                    <?php
                include( $_SERVER['DOCUMENT_ROOT'].'/freight/views/Administrative/visitor-administrative/components/visitor-header.administrative.php');
                ?>
                </div>
            </div>
         <!-- content -->
            <div class=" sm:h-[calc(100%-50px)] h-auto w-full  mt-16">
                <div class=" w-full h-auto flex xl:flex-row flex-col relative ">
                        <!-- chat -->
                    <div class="w-auto relative ">
                    <div class="h-auto w-full  p-3">
                    <div class="bg-yellow-50 drop-shadow-xl border-l-4 border-orange-600 text-orange-700 p-10" role="alert">
                        <p class="font-bold">
                        <?php echo "Hi ".$_SESSION['visitor_account']['fullname']; ?>
                        </p>
                        <p>It's nice to meet you, we are here to help you.</p>
                    </div>
                    </div>
                    <img
                        class="mx-auto sm:hidden block px-3 w-full h-auto "
                        src="
                            <?php 
                        echo $GLOBALS['url']."/assets/img/question-visitor.webp"; 
                        ?>"
                        alt="logo"
                        />
                     <div class="w-full h-auto xl:block flex pb-5 ">
                        <img
                        class=" sm:block hidden px-3 xl:w-full md:w-[300px] w-[200px] h-auto "
                        src="
                            <?php 
                        echo $GLOBALS['url']."/assets/img/question-visitor.webp"; 
                        ?>"
                        alt="logo"
                        class=" rounded-full absolute top-[50%] left-[50%] -translate-y-2/4 -translate-x-2/4 min-h-full min-w-full block"
                        />
                        <div class="w-[calc(100%-20px)] h-auto p-3  mx-3 xl:mt-3 shadow-xl">
                        <p class="text-xl mb-3 text-indigo-500 uppercase font-semibold">Do you have any questions?</p>
                        <p class="text-sm mb-5">
                        If there is, click the button below so you can ask through chat and it's free, you can ask freely
                        </p>
                            <div class="flex justify-center w-full h-auto relative  mb-5">
                                <a
                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
                                href="#"
                                >
                                Inquirer Here!
                                </a>
                            </div>
                        </div>

                    </div>
                    </div>
                        <!-- request form -->
                    <div class=" w-full h-auto relative p-3 ">
                        <?php
                            include( $_SERVER['DOCUMENT_ROOT'].'/freight/views/Administrative/visitor-administrative/components/request-form-created.administrative.php');
                        ?>
                    </div>
                
                 <div class=" px-4 w-full h-auto pb-10 flex xl:flex-row flex-col relative mt-5">
                            <!-- list of visitor -->
                    <div class=" xl:w-[70%] w-auto  xl:h-full h-auto relative ">
                        <h2 class=" uppercase font-semibold text-lg mb-5 text-indigo-500 text-center">Expected visitor a day in the company.</h2>
                            <div class=" block relative flex lg:flex-row flex-col lg:gap-x-4 lg:gap-y-0 gap-y-4">
                                    <?php
                                        include( $_SERVER['DOCUMENT_ROOT'].'/freight/views/Administrative/visitor-administrative/components/calendar.administrative.php');
                                    ?>
                                    <div class="relative lg:w-[55%] w-full h-[500px] overflow-y-scroll border-x-[1px] border-b-[1px]   ">
                                        <div class="relative w-full h-auto  ">
                                            <?php
                                        include( $_SERVER['DOCUMENT_ROOT'].'/freight/views/Administrative/visitor-administrative/components/visitor-list-table.administrative.php');
                                        ?>
                               </div>
                               </div>
                            </div>
                        </div>
                            <!-- visitor analytics -->
                        <div class=" xl:w-[30%] w-full flex flex-col justify-center items-center  xl:h-[550px] h-[400px]  relative">
                        <h1 class="uppercase text-lg font-semibold text-indigo-500 py-5">total visitor</h1>
                            <div>
                                <?php
                                  include( $_SERVER['DOCUMENT_ROOT'].'/freight/views/Administrative/visitor-administrative/components/visitor-chart.administrative.php');
                                ?>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
    <?php
        if(
        empty($_SESSION['visitor_account']['profile'])||
        empty($_SESSION['visitor_account']['gender'])||
        empty($_SESSION['visitor_account']['birthdate'])||
        empty($_SESSION['visitor_account']['address'])||
        empty($_SESSION['visitor_account']['country'])){
                include( $_SERVER['DOCUMENT_ROOT'].'/freight/views/Administrative/visitor-administrative/components/modal-complete-details.administrative.php');
            }
        ?>
</main>
<!-- <script src="/freight/views/js/content-three-request-appoinment.js"></script> -->

<?php
include( $_SERVER['DOCUMENT_ROOT'].'/freight/views/Administrative/layout/footer-setup-administrative.php');
?>