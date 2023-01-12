
<?php

//view

if(
empty($_SESSION["user_login_administrative"]) && 
empty($_SESSION['visitor-management-account']) &&
empty($_SESSION["document-management-account"])&&
empty($_SESSION["legal-management-account"])&&
empty($_SESSION["legal-management-account"])&&
empty($_SESSION["facility-reservation-account"])&&
empty($_SESSION["user-management-account"])
){
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
        get('/administrative/admin', 'views/Administrative/pages/admin-login-page.administrative.php');
    }
}else{
    //client
    if(!empty($_SESSION["user_login_administrative"])){
        if(!empty($_SESSION["forgot-password-administrative"])){
            get('/administrative-change-password/$secret', 'views/Administrative/pages/change-password.administrative.php');
        }
      
        get('/administrative/visitor-dashboard','views/Administrative/visitor-administrative/pages/index-page.administrative.php');
        get('/administrative/visitor-dashboard/profile','views/Administrative/visitor-administrative/pages/index-page.administrative.php');
        get('/administrative/visitor-dashboard/inquirers','views/Administrative/visitor-administrative/pages/index-page.administrative.php');
        get('/administrative/visitor-dashboard/appointment-request','views/Administrative/visitor-administrative/pages/index-page.administrative.php');
        get('/administrative/visitor-dashboard/appointment-request/view/$visitor_request_id','views/Administrative/visitor-administrative/pages/index-page.administrative.php');
        get('/administrative/visitor-dashboard/appointment-request/edit/$visitor_request_id','views/Administrative/visitor-administrative/pages/index-page.administrative.php');
        get('/administrative/visitor-dashboard/appointment-request/delete/$visitor_request_id','views/Administrative/visitor-administrative/pages/index-page.administrative.php');
        get('/administrative/visitor-dashboard/appointment-request/qr-code/$visitor_request_id','views/Administrative/visitor-administrative/pages/index-page.administrative.php');
        get('/administrative/visitor-dashboard/company-facility','views/Administrative/visitor-administrative/pages/index-page.administrative.php');
        get('/administrative/visitor-dashboard/company-facility/$facility_id','views/Administrative/visitor-administrative/pages/index-page.administrative.php');
    }else if(!empty($_SESSION["visitor-management-account"])){
        get('/administrative/admin/visitor-management-dashboard/profile','views/Administrative/admin-administrative/visitor-management/pages/profile.administrative.php');
        get('/administrative/admin/visitor-management-dashboard/inquirers','views/Administrative/admin-administrative/visitor-management/pages/inquirers.administrative.php');
        get('/administrative/admin/visitor-management-dashboard/inquirers/$participant_id','views/Administrative/admin-administrative/visitor-management/pages/inquirers-participant.administrative.php');
        get('/administrative/admin/visitor-management-dashboard/appointment-request','views/Administrative/admin-administrative/visitor-management/pages/appointment-request.administrative.php');
        get('/administrative/admin/visitor-management-dashboard/visitors','views/Administrative/admin-administrative/visitor-management/pages/visitors.administrative.php');
        get('/administrative/admin/visitor-management-dashboard/appointment-request/qrcode/$requestVisitorId','views/Administrative/admin-administrative/visitor-management/pages/qrcode-redirection.php');
        get('/administrative/admin/visitor-management-dashboard/qrcode-scanner','views/Administrative/admin-administrative/visitor-management/pages/qrcode-scanner.php');
        get('/administrative/admin/visitor-management-dashboard/appointment-request/view/$visitor_management_request_id','views/Administrative/admin-administrative/visitor-management/pages/view-appointment.php');
        get('/administrative/admin/visitor-management-dashboard/appointment-request/edit/$visitor_request_id','views/Administrative/admin-administrative/visitor-management/pages/edit-appointment.php');
        get('/administrative/admin/visitor-management-dashboard/appointment-request/delete/$visitor_request_id','views/Administrative/admin-administrative/visitor-management/pages/delete-appointment.php');
        get('/administrative/admin/visitor-management-dashboard/appointment-request/create/$visitor_id','views/Administrative/admin-administrative/visitor-management/pages/create-appointment.php');
        get('/administrative/admin/visitor-management-dashboard/view/$visitor_id','views/Administrative/admin-administrative/visitor-management/pages/view-profile.php');
        get('/administrative/admin/visitor-management-dashboard/edit/$visitor_id','views/Administrative/admin-administrative/visitor-management/pages/edit-profile.php');

    }else if(!empty($_SESSION["document-management-account"])){
        get('/administrative/admin/document-management-dashboard/documents','views/Administrative/admin-administrative/document-management/pages/documents.php');
    }
    else if(!empty($_SESSION["legal-management-account"])){
        get('/administrative/admin/legal-management-dashboard/legal','views/Administrative/admin-administrative/legal-management/pages/legal.php');
    }else if(!empty($_SESSION["facility-reservation-account"])){
        get('/administrative/admin/facility-reservation-dashboard/legal','views/Administrative/admin-administrative/facility-reservation/pages/facility-reservation.php');
    }else if(!empty($_SESSION["user-management-account"])){
        get("/administrative/admin/user-management-dashboard",'views/Administrative/admin-administrative/user-management/pages/dashboard.php');
        get("/administrative/admin/user-management-dashboard/profile",'views/Administrative/admin-administrative/user-management/pages/profile.php');
        get("/administrative/admin/user-management-dashboard/create-account",'views/Administrative/admin-administrative/user-management/pages/create.account.php');
    }
}



//controller
//Administrative Visitors ----->

//Authentication
post('/login-user', 'controller/Administrative/Visitors/Authentication/login-user-administrative.php');
get('/go-to-dashboard','controller/Administrative/Visitors/Authentication/dashboard-request.administrative.php');
get('/re-login','controller/Administrative/Visitors/Authentication/relogin-request.administrative.php');
//Register
post('/register-user', 'controller/Administrative/Visitors/Register/register-user-administrative.php');
//ForgotPassword
post('/forgot-password-send-email', 'controller/Administrative/Visitors/ForgotPassword/forgotpassword-send-code.administrative.php');
post('/forgot-change-password','controller/Administrative/Visitors/ForgotPassword/changepassword.administrative.php');
get('/forgotpassword-session-expired','controller/Administrative/Visitors/ForgotPassword/forgotpassword-expired.administrative.php');
get('/forgotpassword-remove-session','controller/Administrative/Visitors/ForgotPassword/forgotpassword-remove-session.administrative.php');

//EmailVerification
post('/verify-email', 'controller/Administrative/Visitors/EmailVerification/verification-email.administrative.php');
get('/verify-session', 'controller/Administrative/Visitors/EmailVerification/get-expired-verification.administrative.php');
get('/verify-session-remove','controller/Administrative/Visitors/EmailVerification/remove-verification.administrative.php');
get('/timer','controller/Administrative/Visitors/EmailVerification/timer.administrative.php');
get('/verification-session-start','controller/Administrative/Visitors/EmailVerification/start-sessiion-verification.administrative.php');
get('/resend-verification-code','controller/Administrative/Visitors/EmailVerification/resend-new-code-verification.administrative.php');


//Facility
get('/get-company-facility', 'controller/Administrative/Visitors/Company-Facility/fetch-company-facility.administrative.php');
get('/get-company-facility-by-id/$facility_id', 'controller/Administrative/Visitors/Company-Facility/fetch-company-facility-by-id.administrative.php');

//Appointment
post('/create-appointment-request', 'controller/Administrative/Visitors/Appointment-Request/create-appointment-request.administrative.php');
post('/edit-appointment-request', 'controller/Administrative/Visitors/Appointment-Request/edit-appointment-request.administrative.php');
post('/delete-appointment-request', 'controller/Administrative/Visitors/Appointment-Request/delete-appointment-request.administrative.php');
post('/view-appointment-request', 'controller/Administrative/Visitors/Appointment-Request/get-request-appointment-by-id.administtrative.php');
get('/get-appointment-request', 'controller/Administrative/Visitors/Appointment-Request/get-request-appointment-created.php');

//History
get('/get-history', 'controller/Administrative/Visitors/History/get-history.administrative.php');
get('/seen-all-history', 'controller/Administrative/Visitors/History/seen-all-notification.administrative.php');
post('/seen-one-history', 'controller/Administrative/Visitors/History/seen-notification.administrative.php');

//Visitor-Today
get('/get-visitor-today', 'controller/Administrative/Visitors/Visitor-Today/get-visitor-today.administrative.php');

//Inquirers
post('/create-message', 'controller/Administrative/Visitors/Inquirers/create-message.administrative.php');
get('/get-message', 'controller/Administrative/Visitors/Inquirers/get-messages.administrative.php');

//visitor
post('/visitor-complete-info', 'controller/Administrative/Visitors/Visitor/complete-info-visitor.administrative.php');
post('/visitor-logout', 'controller/Administrative/Visitors/Visitor/logout-visitor.administrative.php');
post('/visitor-update-profile', 'controller/Administrative/Visitors/Visitor/update-profile-visitor.administrative.php');
get('/get-total-visitor', 'controller/Administrative/Visitors/Visitor/total-visitor.administrative.php');


//<---- ----->

//Administrative Admin ----->

//user-management
post('/visitor-management-authentication','controller/Administrative/Admin/User-Management/handle-admin-authentication.php');
post('/visitor-management-update-profile','controller/Administrative/Admin/User-Management/update-profile.php');
get('/visitor-management-account-logout','controller/Administrative/Admin/User-Management/logout-admin.php');
get('/visitor-management-get-all-accounts','controller/Administrative/Admin/User-Management/get-all-accounts.php');

//Inquirers visiotr management
get('/get-inquirers-participants','controller/Administrative/Admin/Visitor-Management/get-inquirers-participants.php');
post('/update-seen-inquirers-participants','controller/Administrative/Admin/Visitor-Management/update-seen.php');
post('/create-message-visitor-management','controller/Administrative/Admin/Visitor-Management/create-message.php');
post('/get-message-visitor-management','controller/Administrative/Admin/Visitor-Management/get-messages.php');
post('/get-details-visitor-management','controller/Administrative/Admin/Visitor-Management/get-visitor-details.php');

//Visitors
post('/get-all-visitors-account','controller/Administrative/Admin/Visitor-Management/get-all-visitors.php');
post('/get-visitor-from-id','controller/Administrative/Admin/Visitor-Management/get-visitor-from-id.php');
post('/update-visitor-password','controller/Administrative/Admin/Visitor-Management/update-visitor-password.php');
post('/deactivate-visitor-account','controller/Administrative/Admin/Visitor-Management/deactivate-visitor-account.php');

//Appointment
get('/get-all-visitors-request-appointment-active/$status','controller/Administrative/Admin/Visitor-Management/get-all-request-appointment-active.php');
get('/get-all-visitors-request-appointment-deactive','controller/Administrative/Admin/Visitor-Management/get-all-request-appointment-deactive.php');
post('/update-request-status','controller/Administrative/Admin/Visitor-Management/update-request-status.php');
get('/get-all-visitors-request-appointment-status/$status','controller/Administrative/Admin/Visitor-Management/get-all-request-appointment-by-status.php');
post('/get-visitors-request-appointment-by-id','controller/Administrative/Admin/Visitor-Management/get-visitors-request-appointment-by-id.php');
//QR-CODE
post('/scan-qrcode','controller/Administrative/Admin/Visitor-Management/scan-qrcode.php');

//History
get('/get-visitor-management-history','controller/Administrative/Admin/Visitor-Management/get-visitor-management-history.php');
post('/seen-visitor-management-history','controller/Administrative/Admin/Visitor-Management/seen-history.php');
get('/mark-all-as-read-history','controller/Administrative/Admin/Visitor-Management/mark-all-as-read-history.php');





//always in the bottom routes not found send 404 page
any('/404','views/Administrative/pages/404.php');