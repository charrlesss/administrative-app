<?php
include( $_SERVER['DOCUMENT_ROOT'].'/freight/model/query-method.php');
include( $_SERVER['DOCUMENT_ROOT'].'/freight/libraries/send-mail.php');

$digits = 5;
$verifyEmailCode = rand(pow(10, $digits-1), pow(10, $digits)-1);
sendmail($verifyEmailCode);
edit_by_email_new_code($verifyEmailCode);

$response = array(
    'message'=>'Successfuly Resend Code' ,
    'success'=>true
);

header('Content-Type: application/json; charset=utf-8');
echo json_encode($response);

