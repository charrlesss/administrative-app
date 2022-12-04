
<?php
include( $_SERVER['DOCUMENT_ROOT'].'/freight/model/appointment-request.administrative.php');

$view_appointment = getRequestAppointmentbyId($_POST['requestVisiotrId']);
if(count($view_appointment) == 0){
    $response = array(
        'appointment'=>false,
        'participants'=>false
    );
    header('Content-Type: application/json; charset=utf-8');
    echo json_encode($response);
    return;
}
$view_participants = getRequestAppointmentParticipantsById($view_appointment[0]['visitor_id'],$view_appointment[0]['visitor_request_id']);

$response = array(
    'appointment'=>$view_appointment,
    'participants'=>$view_participants
);
header('Content-Type: application/json; charset=utf-8');
echo json_encode($response);