<?php
include( $_SERVER['DOCUMENT_ROOT'].'/freight/model/Administrative/Visitors/appointment-request.administrative.php');
include( $_SERVER['DOCUMENT_ROOT'].'/freight/model/Administrative/Visitors/history-administrative.php');

$fullname =$_POST['fullname'];
$email = $_POST['email'];
$country = $_POST['country-mb'];
$mb_number =    $_POST['mb-number'];
$time_visit = $_POST['time-visit'];
$date_visit =    $_POST['date-visit'];
$address = $_POST['address'];
$participants =$_POST['participants'];
$purpose = $_POST['purpose'];
$visitor_request_id  =  $_POST['requestId'];
$visitor_id =$_SESSION["user_login_administrative"];
deleteRequestAppointmentParticipantsById($visitor_id ,$visitor_request_id);
updateVisitorManagementRequestAppointmentParticipants($visitor_request_id,$participants);
$index = 0;
foreach ($_POST as $param_name => $param_val) {
    if($index > 9){
        createVisitorRequestAppointmentParticipants($visitor_id ,$param_val,$visitor_request_id);
    }
    $index++;
}
updateRequestAppointment(
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
);
createRequestAppointmentHistory($visitor_id ,'You are updated your appointment request.');

$response = array(
    "message"=>"Appointment Request Updated Successfully.",
    "success"=>true
);
header('Content-Type: application/json; charset=utf-8');
echo json_encode($response);
