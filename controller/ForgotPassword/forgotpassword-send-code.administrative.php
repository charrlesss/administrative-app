<?php
include( $_SERVER['DOCUMENT_ROOT'].'/freight/model/query-method.php');
include( $_SERVER['DOCUMENT_ROOT'].'/freight/libraries/send-mail.php');
use Ramsey\Uuid\Uuid;

$uuid = Uuid::uuid4();

$email =$_POST['email'];

$secret = $uuid->toString();
$_SESSION['start'] = time();
$_SESSION['expire'] = $_SESSION['start'] + (30 * 60);

$_SESSION["forgot-password-administrative"] = "$secret";
$_SESSION["forgot-password-email-administrative"] = "$email";


$sendlink = rtrim($GLOBALS['url'] ,'/')."/change-password/$secret";
sendmail($sendlink);

$response = array(
    'message'=>"Successfully Send link verification to $email",
    'success'=> true
);

header('Content-Type: application/json; charset=utf-8');
echo json_encode($response);