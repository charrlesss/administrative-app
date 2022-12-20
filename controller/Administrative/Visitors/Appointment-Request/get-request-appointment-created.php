<?php
include( $_SERVER['DOCUMENT_ROOT'].'/freight/model/appointment-request.administrative.php');

$visitor_id = $_SESSION["user_login_administrative"];

$request_appointment = getRequestAppointmentByVisitorId($visitor_id);


$response = array(
    "request_appointment"=>$request_appointment
);
header('Content-Type: application/json; charset=utf-8');
echo json_encode($response);