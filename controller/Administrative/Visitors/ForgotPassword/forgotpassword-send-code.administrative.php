<?php
include( $_SERVER['DOCUMENT_ROOT'].'/freight/model/Administrative/Visitors/query-method.php');
include( $_SERVER['DOCUMENT_ROOT'].'/freight/libraries/send-mail.php');
use Ramsey\Uuid\Uuid;

$uuid = Uuid::uuid4();

$email =$_POST['email'];


$secret = $uuid->toString();
$_SESSION['start'] = time();
$_SESSION['expire'] = $_SESSION['start'] + (30 * 60);

if(!empty($_POST['from'])){
    $_SESSION["request-from-profile-administrative"] =$_POST['from'];
}


$_SESSION["forgot-password-administrative"] = "$secret";
$_SESSION["forgot-password-email-administrative"] = "$email";


$sendlink = rtrim($GLOBALS['url'] ,'/')."/administrative-change-password/$secret";
sendmail($sendlink);

$response = array(
    'message'=>"Successfully Send link verification to $email",
    'success'=> true
);

header('Content-Type: application/json; charset=utf-8');
echo json_encode($response);