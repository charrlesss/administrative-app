<?php
include( $_SERVER['DOCUMENT_ROOT'].'/freight/model/Administrative/Visitors/visitor.administrative.php');

logout_account($_SESSION["user_login_administrative"]);
session_destroy();

$response = array(
    'message'=>"Logout Account Successfully",
    'success'=>true
);  

    header('Content-Type: application/json; charset=utf-8');
    echo  json_encode($response);
