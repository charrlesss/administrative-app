<?php
include( $_SERVER['DOCUMENT_ROOT'].'/freight/model/query-method.php');

unset($_POST['confirmPassword']);
$password =password_hash($_POST['password'],PASSWORD_BCRYPT);
$email =$_SESSION["forgot-password-email-administrative"];
edit_by_email_password($email,$password);

session_destroy();


$message = !empty($_SESSION["request-from-profile-administrative"]) ? "Your session will terminated you need to login again, Your password has been changed successfully." : "Your password has been changed successfully.";


$response = array(
    'message'=> $message,
    'success'=> true
);

header('Content-Type: application/json; charset=utf-8');
echo json_encode($response);