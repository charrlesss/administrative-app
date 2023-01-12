<?php
include( $_SERVER['DOCUMENT_ROOT'].'/freight/model/Administrative/Admin/user-management.administrative.php');
include( $_SERVER['DOCUMENT_ROOT'].'/freight/model/Administrative/Admin/visitor-management.administrative.php');

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
 $account_id = $_SESSION['account_id'];

$user = getUserAdminByAccountId($account_id);
$department = $user['department'];
if($profile['name'] !== $user['profile']){
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
    update_admin_account_profile($filename,$account_id);
    $_SESSION[$department.'-account']['profile'] = $filename; 
}
    


    update_admin_account(
        $fullname,	
        $email,		
        $mb_number,		
        $countries_input,		
        $birthdate,
        $address,		
        $gender,		
        $account_id		
    );

createVisitorManagementHistory("Your update your info");
$user = getUserAdminByAccountId($account_id);
$department = $user['department'];
$_SESSION[$department.'-account'] = $user; 



$response = array(
    'message'=>"Update Profile Successfully",
    'success'=>true
);  

    header('Content-Type: application/json; charset=utf-8');
    echo  json_encode($response);
