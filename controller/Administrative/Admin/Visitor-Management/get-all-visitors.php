<?php
include( $_SERVER['DOCUMENT_ROOT'].'/freight/model/Administrative/Admin/visitor-management.administrative.php');
$response =  array(
    "visitors"=> getAllVisitorAccount(),
    'lastrow'=>hasChangesVisitorAccountTable(),
    'lastcount'=>affectVisitorAccountTable()
); 


header('Content-Type: application/json; charset=utf-8');
echo  json_encode($response);