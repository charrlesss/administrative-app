<?php
include( $_SERVER['DOCUMENT_ROOT'].'/freight/model/visitor.administrative.php');
use Ramsey\Uuid\Uuid;
$uuid = Uuid::uuid4();

$fileNameParts = explode('.', $_FILES['profile']['name']);
$ext = end($fileNameParts);
$secretname = $uuid->toString();
$filename = "$secretname.$ext";
$uploaddir = $_SERVER['DOCUMENT_ROOT'].'/freight/assets/profile/';
$uploadfile = $uploaddir . basename($filename);

$address =$_POST['address'];
$gender =$_POST['gender'];
$country =$_POST['country'];
$mb_number =$_POST['mb-number'];
$birthdate =$_POST['birthdate'];


if(!move_uploaded_file($_FILES['profile']['tmp_name'], $uploadfile)){
    $response = array(
        "message"=>"Server Error",
        "success"=>false
    );
    header('Content-Type: application/json; charset=utf-8');
    echo   json_encode($response);
    return;
}
  
    complte_info_by_id( 
    $filename,
    $gender,
    $address,
    $country,
    $mb_number,
    $birthdate
    );

    $_SESSION['visitor_account']['profile'] = $filename;
    $_SESSION['visitor_account']['country'] = $country;
    $_SESSION['visitor_account']['gender'] = $gender;
    $_SESSION['visitor_account']['address'] = $address;
    $_SESSION['visitor_account']['mb_number'] = $mb_number;
    $_SESSION['visitor_account']['birthdate'] = $birthdate;





    $response = array(
        "message"=>"Successfully Complete Info.",
        "success"=>true
    );
    
    header('Content-Type: application/json; charset=utf-8');
    echo   json_encode($response);


