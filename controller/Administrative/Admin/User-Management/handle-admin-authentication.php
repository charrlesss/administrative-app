<?php
include( $_SERVER['DOCUMENT_ROOT'].'/freight/controller/Shared/Authentication/auth-user.administrative.php');


$employeeId = $_POST['employeeId'];
$password = $_POST['password'];

$response = authUser($employeeId,$password,function($user,$link,$department){
    $_SESSION[$department.'-account'] = $user;
    $_SESSION['account_id'] = $user['account_id'];
    return  array(
        'message'=>'Login Successfully.',
        'success'=>true,
        "redirect"=>$link
    ); 
});

header('Content-Type: application/json; charset=utf-8');
echo  json_encode($response);