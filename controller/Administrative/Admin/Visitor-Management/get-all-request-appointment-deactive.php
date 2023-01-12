<?php
include( $_SERVER['DOCUMENT_ROOT'].'/freight/model/Administrative/Admin/visitor-management.administrative.php');
$response =  array(
    "appointments"=> getAllVisitorAppointmentRequestDeactive(),
    'log'=>affectVisitorRequestTimeInTimeOutLogTable() + affectVisitorRequestUpdateAppointmentTable()
); 

header('Content-Type: application/json; charset=utf-8');
echo  json_encode($response);