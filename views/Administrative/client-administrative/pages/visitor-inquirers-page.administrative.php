<?php
include( $_SERVER['DOCUMENT_ROOT'].'/freight/views/Administrative/layout/header-setup-administrative.php');
?>
<header>
<body>

<main class="w-screen h-screen ">
    <div class="flex relative h-full w-full ">
         <!-- sidebar -->
        <?php
        include( $_SERVER['DOCUMENT_ROOT'].'/freight/views/Administrative/client-administrative/components/sidebar-administrative.php');
        ?>

        <div class="w-full h-full overflow-x-hidden relative">
        <!-- header -->
            <div id="visitor-header" class="absolute bg-white z-[50] top-0 r-0 l-0  w-full shadow-lg">
                <div  class="flex justify-between  pl-3 xl:pr-20 pr-10 items-center">
                    <?php
                include( $_SERVER['DOCUMENT_ROOT'].'/freight/views/Administrative/client-administrative/components/visitor-header.administrative.php');
                ?>
                </div>
            </div>

                <div>
                inquirers
                </div>
        </div>


    </div>
</main >

<?php
include( $_SERVER['DOCUMENT_ROOT'].'/freight/views/Administrative/layout/footer-setup-administrative.php');
?>