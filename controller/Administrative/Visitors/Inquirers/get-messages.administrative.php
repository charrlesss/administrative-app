<?php
include( $_SERVER['DOCUMENT_ROOT'].'/freight/model/inquirers.administrative.php');
include( $_SERVER['DOCUMENT_ROOT'].'/freight/model/user-management.administrative.php');

// $room_id = $_SESSION["user_login_administrative"];
// $from_id =  $_SESSION["user_login_administrative"];
//  getInquirersMessagesFrom(
//     $_SESSION["user_login_administrative"],
//     $_SESSION["user_login_administrative"]
//  );

$visitor_id = $_SESSION["user_login_administrative"];
$visitor_account = findUserAccount($visitor_id);

$sendMessages =getInquirersMessagesSend(
    $visitor_id ,
    $visitor_account['room_id']
);
$recieveMessages =getInquirersMessagesRecieve(
    $visitor_id ,
    $visitor_account['room_id']
);

$response = array(
    'from'=>$sendMessages,
    'to'=>$recieveMessages,
);
    
    header('Content-Type: application/json; charset=utf-8');
    echo  json_encode($response);
    