<?php

 function createVisitorRequestAppointment(
$fullname,
$email,
$country,
$mb_number,
$time_visit,
$date_visit,
$address,
$participants,
$visitor_id,
$visitor_participants_id,
$purpose
){

 $db = $GLOBALS["db"];
 $time = time();
$sql = "INSERT INTO `visitor-appointment-request`(
`fullname`, `email`, `country`, `mb-number`, `time-visit`, `date-visit`,
`address`, `participants`, `visitor_id`, `visitor_participants_id`,`purpose`,`status`,`createdAt`)
 VALUES 
 ('$fullname','$email','$country','$mb_number',
 '$time_visit','$date_visit','$address','$participants','$visitor_id','$visitor_participants_id',
 '$purpose','under review','$time')";
 $db->query($sql);
 return  $db->insert_id;
}


function createVisitorRequestAppointmentParticipants(
$visitor_participants_id,
$participants_fullname,
$visitor_request_id
){
    $db = $GLOBALS["db"];
    $sql = "INSERT INTO `visitor-appointment-request-participants`(`participants_id`, `fullname`, `visitor_request_id`) VALUES ('$visitor_participants_id','$participants_fullname','$visitor_request_id')";
    $db->query($sql);
}


function getRequestAppointmentByVisitorId($visitor_id){
    $db = $GLOBALS["db"];
    $sql= "SELECT * FROM `visitor-appointment-request` WHERE `visitor_id` = '$visitor_id'";
    $result = $db->query($sql);
    $requestCreated =  $result->fetch_all(MYSQLI_ASSOC);
    return $requestCreated;
}


function storeRequestAppointmentInVisitorManagement(
$fullname,
$email,
$country,
$mb_number,
$time_visit,
$date_visit,
$address,
$participants,
$visitor_id,
$visitor_participants_id,
$purpose
){
    $db = $GLOBALS["db"];
    $time = time();
   $sql = "INSERT INTO `appointment-request-visitor-management`(`fullname`, `email`, `country`, `mb-number`, 
   `time-visit`, `date-visit`, `address`, `participants`, `visitor_id`, `visitor_participants_id`, `purpose`,
    `status`, `docu_status`,,`createdAt`) VALUES  ('$fullname','$email','$country','$mb_number',
 '$time_visit','$date_visit','$address','$participants','$visitor_id','$visitor_participants_id',
 '$purpose','under review','active','$time')";
 $db->query($sql);
}


function getRequestAppointmentbyId($visitor_request_id){
    $db = $GLOBALS["db"];
    $sql= "SELECT * FROM `visitor-appointment-request` WHERE `visitor_request_id` = '$visitor_request_id';";
    $result = $db->query($sql);
    $requestCreated =  $result->fetch_all(MYSQLI_ASSOC);
    return $requestCreated;
}



function getRequestAppointmentParticipantsById($visitor_id ,$visitor_request_id){
    $db = $GLOBALS["db"];
    $sql= "SELECT * FROM `visitor-appointment-request-participants` WHERE  `participants_id` = '$visitor_id' AND `visitor_request_id` = '$visitor_request_id'";
    $result = $db->query($sql);
    $requestCreated =  $result->fetch_all(MYSQLI_ASSOC);
    return $requestCreated;
}


