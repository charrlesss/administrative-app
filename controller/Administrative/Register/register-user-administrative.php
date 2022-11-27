<?php
include( $_SERVER['DOCUMENT_ROOT'].'/freight/model/query-method.php');
include( $_SERVER['DOCUMENT_ROOT'].'/freight/libraries/send-mail.php');
unset($_POST['confirmPassword']);
$digits = 5;
$fullname =$_POST['fullname'];
$email =$_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_BCRYPT);
$verifyEmail =false;
$verifyEmailCode = rand(pow(10, $digits-1), pow(10, $digits)-1);

if(!empty(find_by_email('visitor-account',$email))){
    $response = array(
        'message'=>"This email is already used.",
        'success'=>false);

    header('Content-Type: application/json; charset=utf-8');
    echo  json_encode($response);
    return;
}

$time = time();
    if(insert_new_document(
    'visitor-account',
    "(`fullname`,`email`,`password`,`verify-email`,`verify-email-code`,`createdAt`)",
    "('$fullname','$email','$password','$verifyEmail','$verifyEmailCode','$time')",
    )){
        sendmail($verifyEmailCode);
        $_SESSION["verify-email-administrative"] = "$email";
       
        
        $response = array(
            'message'=>"Successfuly Registered",
            'success'=>true
        );

            header('Content-Type: application/json; charset=utf-8');
            echo  json_encode($response);
            return;
        }
        
        $response = array(
            'message'=>"Failed to Registed",
    'success'=>false);

    

    header('Content-Type: application/json; charset=utf-8');
    echo  json_encode($response);

    
    
