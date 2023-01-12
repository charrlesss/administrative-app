<?php
include( $_SERVER['DOCUMENT_ROOT'].'/freight/model/Administrative/Admin/visitor-management.administrative.php');
$requestVisitorId = $_POST['requestVisitorId'];

$visitorRequest = getAppointmentFromVisitorRequestId($requestVisitorId);
$date = DateTime::createFromFormat("Y-m-d", $visitorRequest['date-visit']);

$date_now_string = ltrim(strval(date("d")),"0");
$date_of_visit_string = ltrim(strval($date->format("d")),"0");
$date_now = (int)$date_now_string;
$date_of_visit = (int)$date_of_visit_string;

if($date_now > $date_of_visit){
    $response =  array(
        "message"=>"This QR Code is valid only in this day $date_of_visit ",
        "success"=>false
    ); 
    
    header('Content-Type: application/json; charset=utf-8');
    echo  json_encode($response);
    return;
}

if($date_now < $date_of_visit){
    $response =  array(
        "message"=>"This QR Code is expired",
        "success"=>false
    ); 
    
    header('Content-Type: application/json; charset=utf-8');
    echo  json_encode($response);
    return;
}


if($visitorRequest['status'] != 'approved' && $visitorRequest['date_time_in'] != '' && $visitorRequest['date_time_out'] !='' ){
    $response =  array(
        "message"=>"Time in not successfully",
        "success"=>false
    ); 
    
    header('Content-Type: application/json; charset=utf-8');
    echo  json_encode($response);
    return;
}

if($visitorRequest['date_time_in'] != '' && $visitorRequest['date_time_out'] !=''){
    
    $response =  array(
        "message"=>"This QR Code is session  expired",
        "success"=>false
    ); 
    
    header('Content-Type: application/json; charset=utf-8');
    echo  json_encode($response);
    return;
}

if($visitorRequest['date_time_in'] == '' && $visitorRequest['date_time_out'] == ''){
    addTimeInAppointmentFromVisitorRequestId($requestVisitorId);
    createVisitorManagementHistory("Successfully Time in this request id $requestVisitorId");
    $response =  array(
        "message"=>"Successfully Time in",
        "success"=>true
    ); 
    header('Content-Type: application/json; charset=utf-8');
    header('Refresh: 1; url=http://localhost/freight/administrative/admin/visitor-management-dashboard/appointment-request');
    echo  json_encode($response);

    return;

}
addTimeOutAppointmentFromVisitorRequestId($requestVisitorId);
createVisitorManagementHistory("Successfully Time out this request id $requestVisitorId");
$response =  array(
    "message"=>"Successfully Time out",
    "success"=>true
); 

header('Content-Type: application/json; charset=utf-8');
echo  json_encode($response);