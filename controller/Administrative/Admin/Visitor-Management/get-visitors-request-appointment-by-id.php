<?php
include( $_SERVER['DOCUMENT_ROOT'].'/freight/model/Administrative/Admin/visitor-management.administrative.php');

$participants =  getAppointmentParticipantsFromVisitorRequestId($_POST['visitorRequestId']);
$response =  array(
    "appointment"=> getAppointmentFromVisitorRequestId($_POST['visitorRequestId']),
    "participants"=>$participants 
); 

header('Content-Type: application/json; charset=utf-8');
echo  json_encode($response);

