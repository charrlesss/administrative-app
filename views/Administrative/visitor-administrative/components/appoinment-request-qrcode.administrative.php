<?php
include( $_SERVER['DOCUMENT_ROOT'].'/freight/views/Administrative/layout/header-setup-administrative.php');
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>
<header>
<body >
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
              <!-- content -->
                <div class='flex justify-center items-center w-full h-full bg-gray-300'>
                    <div>
                        <div>
                            <p class='text-xl text-indigo-500  font-semibold text-center'>Get Your QR Code</p>
                        </div>
                        <div id='qrcode-container' class=' rounded-xl px-5 mt-10 border  sm:w-[500px] sm:h-[500px] w-[300px] h-[300px] flex justify-center items-center '>
                             <div id="qr-code"></div>
                        </div>
                    </div>
                </div>
         </div>
    </div>
</main >
<script>
    const {width,height} = document.querySelector("#qrcode-container").getBoundingClientRect()
    const requestVisitorId = "<?php  echo $visitor_request_id; ?>"
    var qrcode = new QRCode(document.querySelector("#qr-code"), {
        text: `/freight/administrative/admin/visitor-management-dashboard/appointment-request/qrcode/${requestVisitorId}`,
        width, 
        height,
        colorDark : "#000000",
        colorLight : "#ffffff",
        correctLevel : QRCode.CorrectLevel.H
    });
</script>
<?php
include( $_SERVER['DOCUMENT_ROOT'].'/freight/views/Administrative/layout/footer-setup-administrative.php');
?>