<?php
include( $_SERVER['DOCUMENT_ROOT'].'/freight/controller/Shared/Authentication/auth-user.administrative.php');


$employeeId = $_POST['employeeId'];
$password = $_POST['password'];
$department = 'visitor-management';

$response = authUser($employeeId,$password ,$department ,function($user,$link){
    $_SESSION['visitor-management-account'] = $user;
    
    return  array(
        'message'=>'Login Successfully.',
        'success'=>true,
        "redirect"=>$link
    ); 
});

header('Content-Type: application/json; charset=utf-8');
echo  json_encode($response);