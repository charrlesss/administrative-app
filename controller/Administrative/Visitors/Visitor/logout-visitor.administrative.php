<?php
include( $_SERVER['DOCUMENT_ROOT'].'/freight/model/Administrative/Visitors/visitor.administrative.php');

logout_account($_SESSION["user_login_administrative"]);

$response = array(
    'message'=>"Logout Account Successfully",
    'success'=>true
);  
session_destroy();

    header('Content-Type: application/json; charset=utf-8');
    echo  json_encode($response);
