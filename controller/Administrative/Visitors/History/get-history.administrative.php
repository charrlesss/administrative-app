<?php
include( $_SERVER['DOCUMENT_ROOT'].'/freight/model/Administrative/Visitors/history-administrative.php');

$visitor_id =$_SESSION["user_login_administrative"];

$userHistory = getHistoryById($visitor_id);

$response = array(
    'history'=>$userHistory,
    'affect'=>effectTableHistory($visitor_id)
);

header('Content-Type: application/json; charset=utf-8');
echo json_encode($response);