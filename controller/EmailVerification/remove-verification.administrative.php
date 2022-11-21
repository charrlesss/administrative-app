<?php
include( $_SERVER['DOCUMENT_ROOT'].'/freight/model/query-method.php');
session_destroy();
delete_user_by_email();
$response = array(
    'message'=>'Session Expired' ,
    'success'=>false
);
header('Content-Type: application/json; charset=utf-8');
echo json_encode($response);