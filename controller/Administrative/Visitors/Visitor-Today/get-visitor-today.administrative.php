<?php

include( $_SERVER['DOCUMENT_ROOT'].'/freight/model/appointment-request.administrative.php');
include( $_SERVER['DOCUMENT_ROOT'].'/freight/model/visitor.administrative.php');

$visitorToday = [];
$allRequestAppoinment = getAllAppointmentRequest(date('Y-m-d'));

for ($i=0; $i < count($allRequestAppoinment); $i++) { 
    if($i == 0){
        array_push($visitorToday , get_user_by_id_params($allRequestAppoinment[$i]['visitor_id']));
    }else{
        if($allRequestAppoinment[$i-1]['visitor_id'] != $allRequestAppoinment[$i]['visitor_id']){
            array_push($visitorToday , get_user_by_id_params($allRequestAppoinment[$i]['visitor_id']));
        }
    } 
}
$response = array(
    'visitor_today'=>$visitorToday,
    'date'=>date('Y-m-d')
);  

    header('Content-Type: application/json; charset=utf-8');
    echo  json_encode($response);