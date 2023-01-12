<?php
include( $_SERVER['DOCUMENT_ROOT'].'/freight/model/Administrative/Admin/visitor-management.administrative.php');

$response = array(
    'history'=>getVisitorManagementHistory(),
    'affect'=>effectVisitorManagementTableHistory()
);

header('Content-Type: application/json; charset=utf-8');
echo json_encode($response);