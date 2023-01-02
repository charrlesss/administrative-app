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
$visitor_id =$_SESSION["user_login_administrative"];
$visitor_participants_id = $_SESSION["user_login_administrative"];
$purpose = $_POST['purpose'];

$newRequestId = createVisitorRequestAppointment(
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
);

storeRequestAppointmentInVisitorManagement(
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
    $newRequestId
);
createRequestAppointmentHistory($visitor_id ,'You are create a new appointment request.');
getRequestAppointmentByVisitorId($visitor_id);

$index = 0;
foreach ($_POST as $param_name => $param_val) {
    if($index > 8){
        createVisitorRequestAppointmentParticipants($visitor_participants_id ,$param_val,$newRequestId);
    }
    $index++;
}




$response = array(
    "message"=>"Appointment Request Create Successfully.",
    "success"=>true
);
header('Content-Type: application/json; charset=utf-8');
echo json_encode($response);


