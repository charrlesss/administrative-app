<?php
include( $_SERVER['DOCUMENT_ROOT'].'/freight/model/Administrative/Visitors/history-administrative.php');

$visitor_id =$_SESSION["user_login_administrative"];

seenOneHistoryById($visitor_id ,$_POST['history_id']);

// $userHistory = getHistoryById($visitor_id);
$response = array(
    'message'=>"Successfully Seen One Notification",
);

header('Content-Type: application/json; charset=utf-8');
echo json_encode($response);