
<?php
//view
if(empty($_SESSION["user_login_administrative"])){
    if(!empty( $_SESSION["verify-email-administrative"]) ){
        get('/', 'views/Administrative/pages/landing-page.administrative.php');
        get('/administrative-login', 'views/Administrative/pages/login-page.administrative.php');
        get('/administrative-register', 'views/Administrative/pages/register-page.administrative.php');
        get('/administrative-forgot-password', 'views/Administrative/pages/forgot-password-page.administrative.php');
        get('/administrative-verify-email', 'views/Administrative/pages/email-verification-page.administrative.php');
    }elseif(!empty($_SESSION["forgot-password-administrative"])){
        get('/', 'views/pages/landing-page.administrative.php');
        get('/administrative-login', 'views/Administrative/pages/login-page.administrative.php');
        get('/administrative-register', 'views/Administrative/pages/register-page.administrative.php');
        get('/administrative-forgot-password', 'views/Administrative/pages/forgot-password-page.administrative.php');
        get('/administrative-change-password/$secret', 'views/Administrative/pages/change-password.administrative.php');
    }else{
        get('/', 'views/Administrative/pages/landing-page.administrative.php');
        get('/administrative-login', 'views/Administrative/pages/login-page.administrative.php');
        get('/administrative-register', 'views/Administrative/pages/register-page.administrative.php');
        get('/administrative-forgot-password', 'views/Administrative/pages/forgot-password-page.administrative.php');
    }
}
else{
    //client
    if($_SESSION["user_login_administrative"]){
        if(!empty($_SESSION["forgot-password-administrative"])){
            get('/administrative-change-password/$secret', 'views/Administrative/pages/change-password.administrative.php');
        }
        get('/administrative/visitor-dashboard','views/Administrative/client-administrative/pages/index-page.administrative.php');
        get('/administrative/visitor-dashboard/profile','views/Administrative/client-administrative/pages/index-page.administrative.php');
        get('/administrative/visitor-dashboard/inquirers','views/Administrative/client-administrative/pages/index-page.administrative.php');
        get('/administrative/visitor-dashboard/appointment-request','views/Administrative/client-administrative/pages/index-page.administrative.php');
        get('/administrative/visitor-dashboard/company-facility','views/Administrative/client-administrative/pages/index-page.administrative.php');
        get('/administrative/visitor-dashboard/company-facility/$facility_id','views/Administrative/client-administrative/pages/index-page.administrative.php');
    }
}


//controller


//Authentication
post('/login-user', 'controller/Administrative/Authentication/login-user-administrative.php');
get('/go-to-dashboard','controller/Administrative/Authentication/dashboard-request.administrative.php');
get('/re-login','controller/Administrative/Authentication/relogin-request.administrative.php');
//Register
post('/register-user', 'controller/Administrative/Register/register-user-administrative.php');
//ForgotPassword
post('/forgot-password-send-email', 'controller/Administrative/ForgotPassword/forgotpassword-send-code.administrative.php');
post('/forgot-change-password','controller/Administrative/ForgotPassword/changepassword.administrative.php');
get('/forgotpassword-session-expired','controller/Administrative/ForgotPassword/forgotpassword-expired.administrative.php');
get('/forgotpassword-remove-session','controller/Administrative/ForgotPassword/forgotpassword-remove-session.administrative.php');

//EmailVerification
post('/verify-email', 'controller/Administrative/EmailVerification/verification-email.administrative.php');
get('/verify-session', 'controller/Administrative/EmailVerification/get-expired-verification.administrative.php');
get('/verify-session-remove','controller/Administrative/EmailVerification/remove-verification.administrative.php');
get('/timer','controller/Administrative/EmailVerification/timer.administrative.php');
get('/verification-session-start','controller/Administrative/EmailVerification/start-sessiion-verification.administrative.php');
get('/resend-verification-code','controller/Administrative/EmailVerification/resend-new-code-verification.administrative.php');


//Facility
get('/get-company-facility', 'controller/Administrative/Company-Facility/fetch-company-facility.administrative.php');
get('/get-company-facility-by-id/$facility_id', 'controller/Administrative/Company-Facility/fetch-company-facility-by-id.administrative.php');

//Appointment
post('/get-appointment-content-render', 'controller/Administrative/Appointment-Request/appointment-content-render.administrative.php');

//visitor
post('/visitor-complete-info', 'controller/Administrative/Visitor/complete-info-visitor.administrative.php');
post('/visitor-logout', 'controller/Administrative/Visitor/logout-visitor.administrative.php');
post('/visitor-update-profile', 'controller/Administrative/Visitor/update-profile-visitor.administrative.php');




//always in the bottom routes not found send 404 page

any('/404','views/Administrative/pages/404.php');