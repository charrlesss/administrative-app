<?php
include( $_SERVER['DOCUMENT_ROOT'].'/freight/model/Administrative/Admin/visitor-management.administrative.php');
include( $_SERVER['DOCUMENT_ROOT'].'/freight/model/Administrative/Visitors/user-management.administrative.php');



$visitor_id = $_POST['visitor_id'];
$visitor_mangement_key=getKeyAccountVisitorManagement();

$visitorMessages = getAllMessagesOfVisitor($visitor_id ,$visitor_mangement_key['key']);
$visitorManagementMessages = getAllMessagesOfVisitorManagement($visitor_mangement_key['key'],$visitor_id);
$message = array_merge($visitorMessages['account'], $visitorManagementMessages['account']);

$response = array(
    'message'=>$message,
    'visitor'=>$visitorMessages['changes'],
    'visitor_management'=>$visitorManagementMessages['changes']
);


    
header('Content-Type: application/json; charset=utf-8');
echo  json_encode($response);