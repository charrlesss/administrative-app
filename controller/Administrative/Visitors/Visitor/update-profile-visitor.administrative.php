<?php

include( $_SERVER['DOCUMENT_ROOT'].'/freight/model/Administrative/Visitors/visitor.administrative.php');
include( $_SERVER['DOCUMENT_ROOT'].'/freight/model/Administrative/Visitors/history-administrative.php');
use Ramsey\Uuid\Uuid;
$uuid = Uuid::uuid4();

 $profile = $_FILES['profile'];
 $fullname = $_POST['fullname'];
 $email = $_POST['email'];
 $mb_number = $_POST['mb-number'];
 $countries_input = $_POST['countries-input'];
 $birthdate = $_POST['birthdate'];
 $address = $_POST['address'];
 $gender = $_POST['gender'];
$visitor_id = !empty($_SESSION["user_login_administrative"]) ? $_SESSION["user_login_administrative"] : $_POST['visitor_id'];


    if($profile['name'] !== $_SESSION['visitor_account']['profile']){
        $fileNameParts = explode('.',$profile['name']);
        $ext = end($fileNameParts);
        $secretname = $uuid->toString();
        $filename = "$secretname.$ext";
        $uploaddir = $_SERVER['DOCUMENT_ROOT'].'/freight/assets/profile/';
        $uploadfile = $uploaddir . basename($filename);

        if(!move_uploaded_file($_FILES['profile']['tmp_name'], $uploadfile)){
            $response = array(
                "message"=>"Server Error",
                "success"=>false
            );
            header('Content-Type: application/json; charset=utf-8');
            echo   json_encode($response);
            return;
        }
        createRequestAppointmentHistory($visitor_id,'You are updated your profile.');

        update_visitor_account_profile($filename,$visitor_id);
        $_SESSION['visitor_account']['profile'] = $filename; 
    }
    
  

    update_visitor_account(
        $fullname,
        $email,
        $mb_number,
        $countries_input,
        $birthdate,
        $address ,
        $gender,
        $visitor_id
    );

    update_visitor_history($visitor_id);

$_SESSION['visitor_account']['fullname'] = $fullname; 
$_SESSION['visitor_account']['email'] = $email;
$_SESSION['visitor_account']['mb_number'] = $mb_number;
$_SESSION['visitor_account']['country'] = $countries_input;
$_SESSION['visitor_account']['birthdate'] = $birthdate; 
$_SESSION['visitor_account']['address'] = $address; 
$_SESSION['visitor_account']['gender'] = $gender; 


createRequestAppointmentHistory($visitor_id ,'You are updated your profile.');

$response = array(
    'message'=>"Update Profile Successfully",
    'success'=>true
);  

    header('Content-Type: application/json; charset=utf-8');
    echo  json_encode($response);
