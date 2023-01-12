<?php
include( $_SERVER['DOCUMENT_ROOT'].'/freight/model/Administrative/Admin/visitor-management.administrative.php');

seenVisitorManagementOneHistoryById($_POST['history_id']);

$response = array(
    'message'=>"Successfully Seen One Notification",
);

header('Content-Type: application/json; charset=utf-8');
echo json_encode($response);