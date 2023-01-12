<?php
include( $_SERVER['DOCUMENT_ROOT'].'/freight/model/Administrative/Admin/visitor-management.administrative.php');
include( $_SERVER['DOCUMENT_ROOT'].'/freight/model/Administrative/Visitors/history-administrative.php');

        


$visitorManagementRequestId =$_POST['visitorManagementRequestId'];
$visitorRequestId =$_POST['visitorRequestId'];
$visitor_id = $_POST['visitor_id'];
$status =$_POST['status'];

updateStatus($status,$visitorManagementRequestId,$visitorRequestId);
createRequestAppointmentHistory($visitor_id ,"Your appoinment request is $status.");
createVisitorManagementHistory("You are $status appointment request");


$response =  array(
    "message"=>"Successfully updated  status to $status",
    "success"=>"$visitorManagementRequestId , $visitorRequestId , $status" 
); 

header('Content-Type: application/json; charset=utf-8');
echo  json_encode($response);