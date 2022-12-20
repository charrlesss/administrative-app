<?php
session_destroy();

  
$response = array(
    'message'=>"Relogin Account",
    'success'=>true
);

    header('Content-Type: application/json; charset=utf-8');
    echo  json_encode($response);