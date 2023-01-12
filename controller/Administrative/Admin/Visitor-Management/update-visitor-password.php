<?php
include( $_SERVER['DOCUMENT_ROOT'].'/freight/model/Administrative/Admin/visitor-management.administrative.php');
unset($_POST['confirmPassword']);
$password = password_hash($_POST['password'], PASSWORD_BCRYPT);
$visitor_id = $_POST['visitor_id'];

updatVisitorPassword($password,$visitor_id);

$response =  array(
    "message"=>'Updated password successfully',
    "success"=>true 
); 

header('Content-Type: application/json; charset=utf-8');
echo  json_encode($response);