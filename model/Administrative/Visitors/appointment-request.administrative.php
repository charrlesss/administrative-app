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
    $purpose,
    $visitor_request_id
){
    $db = $GLOBALS["db"];
    $time = time();
   $sql = "INSERT INTO `appointment-request-visitor-management`(
    `fullname`, `email`, `country`, `mb-number`, `time-visit`, `date-visit`,
    `address`, `participants`, `visitor_id`, `visitor_participants_id`,`purpose`,`status`,`docu_status`,`createdAt`,`visitor_request_id`)
     VALUES 
     ('$fullname','$email','$country','$mb_number',
     '$time_visit','$date_visit','$address','$participants','$visitor_id','$visitor_participants_id',
     '$purpose','under review','active','$time','$visitor_request_id')";

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


function deleteRequestAppointmentParticipantsById($participants_id ,$visitor_request_id){
    $db = $GLOBALS["db"];
    $sql=  " DELETE FROM `visitor-appointment-request-participants` WHERE `participants_id` ='$participants_id' AND  `visitor_request_id` = '$visitor_request_id'";
    $db->query($sql);
}

function updateRequestAppointment(
    $fullname,
    $email,
    $country,
    $mb_number,
    $address,
    $time_visit,
    $date_visit,
    $participants,
    $purpose,
    $visitor_request_id
){
    $db = $GLOBALS["db"];
    $sql=  "UPDATE `visitor-appointment-request` SET 
    `fullname`='$fullname',
    `email`='$email',
    `country`='$country',
    `mb-number`='$mb_number',
    `time-visit`='$time_visit',
    `date-visit`='$date_visit',
    `address`='$address',
    `participants`='$participants',
    `purpose`='$purpose'
    WHERE `visitor_request_id` ='$visitor_request_id'";
    $db->query($sql);
}



function deleteRequestAppointment($visitor_request_id){
    $db = $GLOBALS["db"];
    $sql= "DELETE FROM `visitor-appointment-request` WHERE `visitor_request_id` = '$visitor_request_id'";
    $db->query($sql);
}

function updateVisitorManagementRequestAppointmentStatus($visitor_request_id ,$status){
    $db = $GLOBALS["db"];
    $sql= "UPDATE `appointment-request-visitor-management` SET `docu_status`='$status' WHERE `visitor_request_id`='$visitor_request_id'";
    $db->query($sql);
}

function updateVisitorManagementRequestAppointmentParticipants($visitor_request_id ,$participants){
    $db = $GLOBALS["db"];
    $sql= "UPDATE `appointment-request-visitor-management` SET `participants`='$participants' WHERE `visitor_request_id`='$visitor_request_id'";
    $db->query($sql);
}


function getAllAppointmentRequest($date){
    $db = $GLOBALS["db"];
   
   $sql = "SELECT * FROM `visitor-appointment-request` WHERE `date-visit`='$date'";
   $result = $db->query($sql);
   $requestCreated =  $result->fetch_all(MYSQLI_ASSOC);
   return $requestCreated;
}