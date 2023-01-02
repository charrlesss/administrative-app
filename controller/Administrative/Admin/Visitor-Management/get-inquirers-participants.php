<?php

include( $_SERVER['DOCUMENT_ROOT'].'/freight/model/Administrative/Admin/visitor-management.administrative.php');

$getLastMessages =[];
$participants = getInquirersParticipants();

foreach ($participants as $key => $value){
    if($value['sender_id']){
        array_push($getLastMessages, getInquirersParticipantsLastMessages( $value['sender_id'])[0]);
    }
}


$response =  array(
    "participants"=>$getLastMessages
); 


header('Content-Type: application/json; charset=utf-8');
echo  json_encode($response);