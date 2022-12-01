<?php
include( $_SERVER['DOCUMENT_ROOT'].'/freight/model/query-method.php');
include( $_SERVER['DOCUMENT_ROOT'].'/freight/model/visitor.administrative.php');


$email = $_POST['email'];
$password = $_POST['password'];
$user = find_by_email('visitor-account',$email);
if(empty($user)){
    $response = array(
        'message'=>'No user found with this email!',
        'success'=>false
    );
        
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode($response);
        return;
}

if(!password_verify($password,$user['password'])){
    $response = array(
        'message'=>'Incorrect Password',
        'success'=>false
    );
        
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode($response);
        return;
}

$_SESSION["user_login_administrative"] = $user['visitor_id']; 
$user = get_user_by_id();
$_SESSION['visitor_account'] =$user;
login_account($_SESSION["user_login_administrative"]);




$response = array(
    'message'=>'Successfully Login.',
    'success'=>true
);
    
    header('Content-Type: application/json; charset=utf-8');
    echo json_encode($response);
    return;