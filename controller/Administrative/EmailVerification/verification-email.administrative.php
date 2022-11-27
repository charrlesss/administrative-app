<?php
include( $_SERVER['DOCUMENT_ROOT'].'/freight/model/query-method.php');
$otp =  $_POST['otp'];
$email = $_SESSION["verify-email-administrative"];

$user =find_by_email('visitor-account',$email);

if($user['verify-email-code']  === $otp){
    edit_by_email();
    $response = array(
    'message'=>"Successfully verified email",
    'success'=>false);
    header('Content-Type: application/json; charset=utf-8');
    echo  json_encode($response);

}else{
    $response = array(
    'message'=>"Verify Account Failed, Invalid code!",
    'success'=>false);
    header('Content-Type: application/json; charset=utf-8');
    echo  json_encode($response);
}
	



