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

        <div class="w-full h-full overflow-x-hidden relative">
        <!-- header -->
            <div id="visitor-header" class="absolute bg-white z-[60] top-0 r-0 l-0  w-full shadow-lg">
                <div  class="flex justify-between  pl-3 xl:pr-20 pr-10 items-center">
                    <?php
                    
                include( $_SERVER['DOCUMENT_ROOT'].'/freight/views/Administrative/admin-administrative/visitor-management/components/header.administrative.php');
                ?>
                </div>
            </div>
         <!-- content -->
            <div class=" relative w-full h-[calc(100%-100px)] mt-[70px] flex pr-2">
                <div id="inquirer-sidebar" class="z-[30] bg-white relative lg:w-[25%] w-[15%] h-full shadow-2xl overflow-y-scroll overflow-x-hidden">
                    <?php
                        include( $_SERVER['DOCUMENT_ROOT'].'/freight/views/Administrative/admin-administrative/visitor-management/components/chat-sidebar.administrative.php');
                    ?>
                </div>
                <div class="lg:w-[75%] w-[85%] h-full relative">
                        <div class="flex h-auto w-auto">
                            <h1 class="text-2xl text-indigo-700 font-semibold uppercase my-5 ">
                                inquirers
                            </h1>
                        </div>
                        <div class="w-full h-[calc(100%-100px)] relative  flex flex-col gap-y-2">
                            <div class=" bg-indigo-50 rounded-lg  w-full h-[90%] overflow-y-scroll overflow-x-hidden flex justify-center items-center">
                                <h1 class="text-1xl font-semibold capitalize">
                                    No selected participants
                                </h1>
                            </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</main>


<?php
include( $_SERVER['DOCUMENT_ROOT'].'/freight/views/Administrative/layout/footer-setup-administrative.php');
?>
