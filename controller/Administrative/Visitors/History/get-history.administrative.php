<?php
include( $_SERVER['DOCUMENT_ROOT'].'/freight/model/history-administrative.php');

$visitor_id =$_SESSION["user_login_administrative"];

$userHistory = getHistoryById($visitor_id);

$response = array(
    'history'=>$userHistory,
);

header('Content-Type: application/json; charset=utf-8');
echo json_encode($response);