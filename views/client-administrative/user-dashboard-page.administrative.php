<?php
include( $_SERVER['DOCUMENT_ROOT'].'/freight/views/layout/header-setup-administrative.php');
?>
  <link rel="stylesheet" href="sweetalert2.min.css">
    <script src=
"https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" >
    </script>
      
    <script src=
"https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" >
    </script>


<link rel="stylesheet" href="/path/to/countrySelect.css">
<script src="/path/to/cdn/jquery.min.js"></script>
<script src="/path/to/countrySelect.js"></script>

<header>
<body>
    
<main class="w-screen h-screen ">
    <div class="flex relative h-full w-full">
        <?php
        include( $_SERVER['DOCUMENT_ROOT'].'/freight/views/client-administrative/sidebar-administrative.php');
        ?>
        <div>
        Document asdasd
        </div>
        <?php
        include( $_SERVER['DOCUMENT_ROOT'].'/freight/views/client-administrative/modal-complete-details.administrative.php');
        ?>
    </div>
</main>
<?php
include( $_SERVER['DOCUMENT_ROOT'].'/freight/views/layout/footer-setup-administrative.php');
?>