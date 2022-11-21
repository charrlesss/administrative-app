<?php
session_destroy();

$response = array(
    'message'=>'Session Expired' ,
    'success'=>false
);

header('Content-Type: application/json; charset=utf-8');
echo json_encode($response);