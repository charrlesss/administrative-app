<?php

$expired = $_SESSION['expire'];
$response = array(
    'session_expired'=>$expired ,
    'success'=>true
);

header('Content-Type: application/json; charset=utf-8');
echo json_encode($response);