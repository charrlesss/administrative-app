<?php


$_SESSION['render_page'] = $_POST['renderPage'];


$response = array(
    "render"=>$_POST['renderPage']
);
header('Content-Type: application/json; charset=utf-8');
echo json_encode($response);
