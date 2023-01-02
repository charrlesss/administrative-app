<?php
include( $_SERVER['DOCUMENT_ROOT'].'/freight/model/Administrative/Visitors/inquirers.administrative.php');
include( $_SERVER['DOCUMENT_ROOT'].'/freight/model/Administrative/Visitors/user-management.administrative.php');

$visitor_id = $_SESSION["user_login_administrative"];
$message = $_POST['message'];
$visitor_mangement_key= getKeyAccountVisitorManagement();
$visitor_account = findUserAccount($visitor_id);

if(empty($visitor_account)){

   $room_id = insertInquirersDetails(
        $visitor_id,
        $visitor_mangement_key['key']
    );
    insertInquirersMessages(
        $message,
        $visitor_id,
        $visitor_mangement_key['key'],
        $room_id
    );

    $response = array(
        'message'=>'Send Successfully',
        'success'=>true,
        );
        
        header('Content-Type: application/json; charset=utf-8');
        echo  json_encode($response);

        return;
}

    insertInquirersMessages(
        $message,
        $visitor_id,
        $visitor_mangement_key['key'],
        $visitor_account['room_id']
    );


$response = array(
    'message'=>'Send Successfully',
    'success'=>true,
    );
    
header('Content-Type: application/json; charset=utf-8');
echo  json_encode($response);

