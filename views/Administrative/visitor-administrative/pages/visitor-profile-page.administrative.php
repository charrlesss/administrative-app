<?php
include( $_SERVER['DOCUMENT_ROOT'].'/freight/views/Administrative/layout/header-setup-administrative.php');
?>

    <script src=
"https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" >
    </script>
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
            <div id="visitor-header" class="absolute bg-white z-[50] top-0 r-0 l-0  w-full shadow-lg">
                <div  class="flex justify-between  pl-3 xl:pr-20 pr-10 items-center">
                    <?php
                include( $_SERVER['DOCUMENT_ROOT'].'/freight/views/Administrative/visitor-administrative/components/visitor-header.administrative.php');
                ?>
                </div>
            </div>

                <div class="flex p-5  mt-16  container mx-auto h-[calc(100%-170px)]">
                   <div class="w-full h-full  flex gap-x-4">
                            <!-- profile-->
                        <div class="w-full h-full ">
                            <?php
                                include( $_SERVER['DOCUMENT_ROOT'].'/freight/views/Administrative/visitor-administrative/components/visitor-profile.administrative.php');
                            ?>

                        </div>
                   </div>
                </div>
        </div>


    </div>
</main >

<?php
include( $_SERVER['DOCUMENT_ROOT'].'/freight/views/Administrative/layout/footer-setup-administrative.php');
?>