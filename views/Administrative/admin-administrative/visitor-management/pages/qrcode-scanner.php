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
            <div class=" sm:h-[calc(100%-50px)] h-auto w-full  mt-16 flex items-center justify-center">
            <div class='md:w-[600px] w-full '  id="reader"></div>

            </div>
        </div>
    </div>
</main>
<script src="/freight/views/js/html5-qrcode.min.js"></script>
<script>

function onScanSuccess(decodedText, decodedResult) {
    window.location.href = decodedText
}
function onScanError(errorMessage) {
    console.log(errorMessage)
}
var html5QrcodeScanner = new Html5QrcodeScanner(
    "reader", { fps: 10, qrbox: 250 });
html5QrcodeScanner.render(onScanSuccess, onScanError);
</script>

<?php
include( $_SERVER['DOCUMENT_ROOT'].'/freight/views/Administrative/layout/footer-setup-administrative.php');
?>
