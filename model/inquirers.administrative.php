<?php

function findUserAccount($id){
    $db = $GLOBALS["db"];
    $sql=  "SELECT * FROM `inquirers` WHERE `sender_id` ='$id'"; 
    $result = $db->query($sql);
   $account =  $result->fetch_assoc();
   return $account;
}

function insertInquirersDetails(
    $profile,
    $fullname,
    $visitor_id,
    $reciever_id
){
    $db = $GLOBALS["db"];
   $sql=  "INSERT INTO `inquirers`(`profile`, `fullname`, `sender_id`, `reciever_id`)
    VALUES ('$profile','$fullname','$visitor_id','$reciever_id')";
    $db->query($sql);
    return  $db->insert_id;
}


function insertInquirersMessages(
    $message,
    $from_id,
    $to_id,
    $room_id
){
    $db = $GLOBALS["db"];
    $time = time();
    $seen = false;
    $visitor_sender = true;
    $visitor_management_sender = false;
    $sql= "INSERT INTO `inquerers_room`( `message`, `from_id`, `to_id`, `room_id`,`createdAt`,`seen`,`visitor_sender`,`visitor_management_sender`) 
   VALUES ('$message','$from_id','$to_id','$room_id','$time','$seen','$visitor_sender' ,'$visitor_management_sender')";
    $db->query($sql);
}


function getInquirersMessagesSend(
    $from_id,
    $room_id
){
    $db = $GLOBALS["db"];
   $sql=  "SELECT * FROM `inquerers_room` WHERE  `from_id` = '$from_id' AND `room_id`='$room_id'";
    $result = $db->query($sql);
    $messageFrom =  $result->fetch_all(MYSQLI_ASSOC);
    return $messageFrom;
}

function getInquirersMessagesRecieve(
    $to_id,
    $room_id
){
    $db = $GLOBALS["db"];
   $sql=  "SELECT * FROM `inquerers_room` WHERE  `to_id` = '$to_id' AND `room_id`='$room_id'";
   $result = $db->query($sql);
   $messageTo =  $result->fetch_all(MYSQLI_ASSOC);
   return $messageTo;
}