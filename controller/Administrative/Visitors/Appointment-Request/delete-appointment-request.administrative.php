<?php
include( $_SERVER['DOCUMENT_ROOT'].'/freight/model/appointment-request.administrative.php');
include( $_SERVER['DOCUMENT_ROOT'].'/freight/model/history-administrative.php');

$visitor_request_id = $_POST['requestId'];
$visitor_id = $_SESSION["user_login_administrative"];

deleteRequestAppointmentParticipantsById($visitor_id ,$visitor_request_id);
deleteRequestAppointment($visitor_request_id);
updateVisitorManagementRequestAppointmentStatus($visitor_request_id,'deactive');
createRequestAppointmentHistory($visitor_id ,'You are deleted your appointment request.');

$response = array(
    "message"=>"Appointment Request Deleted Successfully.",
    "success"=>true
);
header('Content-Type: application/json; charset=utf-8');
echo json_encode($response);
