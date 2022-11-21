
<?php
//view
if(empty($_SESSION["user_login_administrative"])){
    if(!empty( $_SESSION["verify-email-administrative"]) ){
        get('/', 'views/email-verification-page.administrative.php');
        get('/register', 'views/register-page.administrative.php');
        get('/forgot-password', 'views/forgot-password-page.administrative.php');
    }elseif(!empty($_SESSION["forgot-password-administrative"])){
        get('/', 'views/landing-page.administrative.php');
        get('/change-password/$secret', 'views/change-password.administrative.php');
        get('/register', 'views/register-page.administrative.php');
        get('/forgot-password', 'views/forgot-password-page.administrative.php');
      
    }else{
        get('/', 'views/landing-page.administrative.php');
        get('/register', 'views/register-page.administrative.php');
        get('/forgot-password', 'views/forgot-password-page.administrative.php');
    }
}
else{
    //client
    get('/','views/client-administrative/user-dashboard-page.administrative.php');
}


//controller


//Authentication
post('/login-user', 'controller/Authentication/login-user-administrative.php');
get('/go-to-dashboard','controller/Authentication/dashboard-request.administrative.php');
get('/re-login','controller/Authentication/relogin-request.administrative.php');
//Register
post('/register-user', 'controller/Register/register-user-administrative.php');
//ForgotPassword
post('/forgot-password-send-email', 'controller/ForgotPassword/forgotpassword-send-code.administrative.php');
post('/forgot-change-password','controller/ForgotPassword/changepassword.administrative.php');
get('/forgotpassword-session-expired','controller/ForgotPassword/forgotpassword-expired.administrative.php');
get('/forgotpassword-remove-session','controller/ForgotPassword/forgotpassword-remove-session.administrative.php');

//EmailVerification
post('/verify-email', 'controller/EmailVerification/verification-email.administrative.php');
get('/verify-session', 'controller/EmailVerification/get-expired-verification.administrative.php');
get('/verify-session-remove','controller/EmailVerification/remove-verification.administrative.php');
get('/timer','controller/EmailVerification/timer.administrative.php');
get('/verification-session-start','controller/EmailVerification/start-sessiion-verification.administrative.php');
get('/resend-verification-code','controller/EmailVerification/resend-new-code-verification.administrative.php');

//visitor
get('/get-visitor-account','controller/Visitor/visitor-account.administrative.php');
post('/visitor-complete-info', 'controller/Visitor/complete-info-visitor.administrative.php');

any('/404','views/404.php');