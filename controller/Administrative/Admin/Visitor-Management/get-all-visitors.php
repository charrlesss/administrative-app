<?php
include( $_SERVER['DOCUMENT_ROOT'].'/freight/model/Administrative/Admin/visitor-management.administrative.php');
$response =  array(
    "visitors"=> getAllVisitorAccount((int)$_POST['status']),
    'log'=>affectVisitorTable()
); 


header('Content-Type: application/json; charset=utf-8');
echo  json_encode($response);