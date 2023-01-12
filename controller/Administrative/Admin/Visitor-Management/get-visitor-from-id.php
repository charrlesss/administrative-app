<?php
include( $_SERVER['DOCUMENT_ROOT'].'/freight/model/Administrative/Visitors/visitor.administrative.php');


$response = array(
    'visitor'=>getVisitorFromId($_POST['visitor_id']),
);

header('Content-Type: application/json; charset=utf-8');
echo json_encode($response);