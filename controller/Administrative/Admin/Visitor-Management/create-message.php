<?php

include( $_SERVER['DOCUMENT_ROOT'].'/freight/model/Administrative/Admin/visitor-management.administrative.php');

$visitor_id = $_POST["visitor_id"];
$message = $_POST['message'];
$visitor_mangement_key=$_SESSION["visitor-management-account"];
$visitor_account = findUserAccount($visitor_id);

insertInquirersMessages(
    $message,
    $visitor_mangement_key['key'],
    $visitor_id,
    $visitor_account['room_id']
);

$response = array(
    'message'=>'Send Successfully',
    'success'=>true,
);
    
header('Content-Type: application/json; charset=utf-8');
echo  json_encode($response);

