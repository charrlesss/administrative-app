<?php
$_SESSION['start'] = time();
$_SESSION['expire'] = $_SESSION['start'] + (1 * 63);

$response = array(
    'message'=>'Session Start' ,
    'success'=>true
);

header('Content-Type: application/json; charset=utf-8');
echo json_encode($response);