<?php
include( $_SERVER['DOCUMENT_ROOT'].'/freight/model/Administrative/Visitors/visitor.administrative.php');

$visitor_id = $_POST['visitor_id'];
$response = array(
    'visitor'=>get_user_by_id_params($visitor_id)
);


    
header('Content-Type: application/json; charset=utf-8');
echo  json_encode($response);