<?php

function getUserAdminByEmployeeId($employee_id , $department){
    $db = $GLOBALS["db"];   
   $sql=  "SELECT * FROM `user-mamagement-account` WHERE `employee_id`='$employee_id' AND `department` ='$department'";
   $result = $db->query($sql);
    if(!$result)return '';
   $account =  $result->fetch_assoc();
   return $account;
}


function getInquirersParticipantsRecieverById($id){
    $db = $GLOBALS["db"];   
   $sql="SELECT `profile`,`fullname`, `message`,`from_id`,`to_id`,`message_createdat`,`seen`,`visitor_sender` FROM `visitor-account` ,`inquirers_room` where `from_id` = '$id'";
   $result = $db->query($sql);
   $inquirers =  $result->fetch_all(MYSQLI_ASSOC);
   return $inquirers;
}

function getInquirersParticipantsById($id){
    $db = $GLOBALS["db"];   
   $sql=  "SELECT  `profile`,`fullname`, `message`,`from_id`,`to_id`,`message_createdat`,`seen`,`visitor_management_sender`
    FROM `user-mamagement-account`
    JOIN `inquirers_room` ON `key` = `from_id` 
    WHERE `to_id` = '$id' ";
   $result = $db->query($sql);
   $inquirers =  $result->fetch_all(MYSQLI_ASSOC);
   return $inquirers;
}
function getInquirersParticipants(){
    $db = $GLOBALS["db"];   
    $sql=  "SELECT  *
    FROM `inquirers` ";

   $result = $db->query($sql);
   $inquirers =  $result->fetch_all(MYSQLI_ASSOC);
   return $inquirers;
}
function getInquirersParticipantsLastMessages($id){
    $db = $GLOBALS["db"];   
    $sql="SELECT `profile`,`fullname`,`message`,`seen`,`from_id`,`message_createdat` FROM `visitor-account` ,`inquirers_room` WHERE `visitor_id`='$id' AND `from_id` ='$id' ORDER BY `message_createdat`  DESC LIMIT 1";
   $result = $db->query($sql);
   $inquirers =  $result->fetch_all(MYSQLI_ASSOC);
   return $inquirers;
}

function updateSeenParticipantMessage($from_id){
    $db = $GLOBALS["db"];   
    $seen = true;
    $sql= "UPDATE `inquirers_room` SET `seen`='$seen' WHERE `from_id` ='$from_id' ";
    $db->query($sql);
    return $db->affected_rows;
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
    $visitor_sender = false;
    $visitor_management_sender = true;
    $sql= "INSERT INTO `inquirers_room`( `message`, `from_id`, `to_id`, `inquirers_room_id`,`message_createdat`,`seen`,`visitor_sender`,`visitor_management_sender`) 
   VALUES ('$message','$from_id','$to_id','$room_id','$time','$seen','$visitor_sender' ,'$visitor_management_sender')";
    $db->query($sql);
}


function findUserAccount($id){
    $db = $GLOBALS["db"];
    $sql=  "SELECT * FROM `inquirers` WHERE `sender_id` ='$id'"; 
    $result = $db->query($sql);
   $account =  $result->fetch_assoc();
   return $account;
}



function getAllMessagesOfVisitor($id,$key){
    $db = $GLOBALS["db"];
    $sql=  "SELECT * FROM `inquirers_room`
    JOIN  `visitor-account` ON `visitor_id` = '$id'
    WHERE `from_id` ='$id' AND `to_id` = '$key'"; 

    $result = $db->query($sql);
   $account =  $result->fetch_all(MYSQLI_ASSOC);
   return array('account'=>$account,'changes'=>$db->affected_rows);
}

function getAllMessagesOfVisitorManagement($key,$id){
    $db = $GLOBALS["db"];
    $sql=  "SELECT * FROM `inquirers_room`
    JOIN  `user-mamagement-account` ON `from_id` = '$key'
    WHERE `from_id` ='$key' AND `to_id` = '$id'"; 

    $result = $db->query($sql);
   $account =  $result->fetch_all(MYSQLI_ASSOC);
   return array('account'=>$account,'changes'=>$db->affected_rows);
}

function hasChangesInTable(){
    $db = $GLOBALS["db"];
   return $db->affected_rows;
}

function getAllVisitorAccount(){
    $db = $GLOBALS["db"];
    $sql=  "SELECT * FROM `visitor-account`"; 
    $result = $db->query($sql);
   return $result->fetch_all(MYSQLI_ASSOC);
}


function hasChangesVisitorAccountTable(){
    $db = $GLOBALS["db"];
    $sql=  "SELECT * FROM `visitor-account`  ORDER BY `visitor_id`  DESC LIMIT 1"; 
    $result = $db->query($sql);
   return $result->fetch_all(MYSQLI_ASSOC);
}


function affectVisitorAccountTable(){
    $db = $GLOBALS["db"];
    $sql=  "SELECT * FROM `visitor-account`"; 
    $result = $db->query($sql);
   return $db->affected_rows;
}

function getAllVisitorAppointmentRequestActive(){
    $db = $GLOBALS["db"];
    $sql=  "SELECT * FROM `appointment-request-visitor-management` arvm JOIN `visitor-account` va ON arvm.visitor_id = va.visitor_id WHERE `docu_status` = 'active'"; 
    $result = $db->query($sql);
   return $result->fetch_all(MYSQLI_ASSOC);
}

function getAllVisitorAppointmentRequestDeactive(){
    $db = $GLOBALS["db"];
    $sql=  "SELECT * FROM `appointment-request-visitor-management` arvm JOIN `visitor-account` va ON arvm.visitor_id = va.visitor_id WHERE `docu_status` = 'deactive'"; 
    $result = $db->query($sql);
   return $result->fetch_all(MYSQLI_ASSOC);
}


