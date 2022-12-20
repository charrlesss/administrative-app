<?php
include( $_SERVER['DOCUMENT_ROOT'].'/freight/model/visitor.administrative.php');
$totalVisitor  = getAllVisitor();
$response = array(
    'total_visitor'=>count($totalVisitor),
    'success'=>true
);  
header('Content-Type: application/json; charset=utf-8');
echo  json_encode($response);