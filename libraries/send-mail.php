<?php

use PHPMailer\PHPMailer\PHPMailer;

function sendmail($verifyEmailCode){
    
$SYSTEM_USERNAME=$_ENV['SYSTEM_EMAIL'];
$SYSTEM_SECRET=$_ENV['SYSTEM_EMAIL_PASSWORD'];

$name = "Frieght Management System";  // Name of your website or yours
$to = "charlespalencia21@gmail.com";  // mail of reciever
$subject = "Tutorial or any subject";
$body = "Heres your verification code for your account </br> <h2>$verifyEmailCode</h2></br>Please enter this code to verify your identity and signin";
$from = $SYSTEM_USERNAME;  // you mail
$password = $SYSTEM_SECRET;  // your mail password

// Ignore from here

require_once "PHPMailer/PHPMailer.php";
require_once "PHPMailer/SMTP.php";
require_once "PHPMailer/Exception.php";
$mail = new PHPMailer();

// To Here

//SMTP Settings
$mail->isSMTP();
// $mail->SMTPDebug = 3;  Keep It commented this is used for debugging                          
$mail->Host = "smtp.gmail.com"; // smtp address of your email
$mail->SMTPAuth = true;
$mail->Username = $from;
$mail->Password = $password;
$mail->Port = 587;  // port
$mail->SMTPSecure = "tls";  // tls or ssl
$mail->smtpConnect([
'ssl' => [
    'verify_peer' => false,
    'verify_peer_name' => false,
    'allow_self_signed' => true
    ]
]);

//Email Settings
$mail->isHTML(true);
$mail->setFrom($from, $name);
$mail->addAddress($to); // enter email address whom you want to send
$mail->Subject = ("$subject");
$mail->Body = $body;
$mail->send();



}