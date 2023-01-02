<?php
include( $_SERVER['DOCUMENT_ROOT'].'/freight/model/Administrative/Admin/visitor-management.administrative.php');
$messages_id = $_POST['message_id'];
$result = updateSeenParticipantMessage($messages_id);

$response =  array(
    "message"=>'updated seen',
    "success"=>$result 
); 

header('Content-Type: application/json; charset=utf-8');
echo  json_encode($response);