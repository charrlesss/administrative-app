<?php

session_destroy();
$redirection  = '/freight/administrative/admin';

$response = array(
    'message'=>"Logout Account Successfully",
    'success'=>true,
    'redirect'=>$redirection 
);  

    header('Content-Type: application/json; charset=utf-8');
    echo  json_encode($response);
