<?php

$response = array(
    'profile'=>$_FILES['profile'],
    'address'=>$_POST['address'],
    'gender'=>$_POST['gender'],
    'country'=>$_POST['country'],
    'mb-number'=>$_POST['mb-number'],
);

header('Content-Type: application/json; charset=utf-8');
echo   json_encode($response);





