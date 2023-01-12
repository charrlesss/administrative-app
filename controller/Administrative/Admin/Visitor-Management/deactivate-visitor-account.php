<?php
include( $_SERVER['DOCUMENT_ROOT'].'/freight/model/Administrative/Admin/visitor-management.administrative.php');
$visitor_id = $_POST['visitor_id'];
deactivateVisitorAccount($visitor_id);

$response =  array(
    "message"=>'Deactivated Account Successfully',
    "success"=>true 
); 

header('Content-Type: application/json; charset=utf-8');
echo  json_encode($response);