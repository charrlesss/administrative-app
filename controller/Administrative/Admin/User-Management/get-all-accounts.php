<?php
include( $_SERVER['DOCUMENT_ROOT'].'/freight/model/Administrative/Admin/user-management.administrative.php');


    $response = array(
        'accounts'=>getAllAccounts()
    );  

    header('Content-Type: application/json; charset=utf-8');
    echo  json_encode($response);
