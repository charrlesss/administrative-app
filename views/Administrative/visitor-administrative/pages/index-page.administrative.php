<?php
     include( $_SERVER['DOCUMENT_ROOT'].'/freight/views/Administrative/visitor-administrative/pages/validate-user-account.php');

    $url =  $_SERVER["REQUEST_URI"];
    if( strval( $url)  === "/freight/administrative/visitor-dashboard"){
        return include( $_SERVER['DOCUMENT_ROOT'].'/freight/views/Administrative/visitor-administrative/pages/visitor-dashboard-page.administrative.php');
    }else if( strval( $url)  === "/freight/administrative/visitor-dashboard/profile"){
        return include( $_SERVER['DOCUMENT_ROOT'].'/freight/views/Administrative/visitor-administrative/pages/visitor-profile-page.administrative.php');
    }else if( strval( $url)  === "/freight/administrative/visitor-dashboard/inquirers"){
        return include( $_SERVER['DOCUMENT_ROOT'].'/freight/views/Administrative/visitor-administrative/pages/visitor-inquirers-page.administrative.php');
    }else if( strval( $url)  === "/freight/administrative/visitor-dashboard/appointment-request"){
        return include( $_SERVER['DOCUMENT_ROOT'].'/freight/views/Administrative/visitor-administrative/pages/visitor-appointment-request-page.administrative.php');
    }else if( strval( $url)  === "/freight/administrative/visitor-dashboard/company-facility"){
        return include( $_SERVER['DOCUMENT_ROOT'].'/freight/views/Administrative/visitor-administrative/pages/visitor-company-facility-page.administrative.php');
    }else if(isset($facility_id) && strval( $url)  === "/freight/administrative/visitor-dashboard/company-facility/$facility_id"){
        return include( $_SERVER['DOCUMENT_ROOT'].'/freight/views/Administrative/visitor-administrative/pages/facility.administrative.php');
    }else if(isset($visitor_request_id) && strval( $url)  === "/freight/administrative/visitor-dashboard/appointment-request/view/$visitor_request_id"){
        return include( $_SERVER['DOCUMENT_ROOT'].'/freight/views/Administrative/visitor-administrative/components/appoinment-request-view.administrative.php');
    }else if(isset($visitor_request_id) && strval( $url)  === "/freight/administrative/visitor-dashboard/appointment-request/edit/$visitor_request_id"){

        return include( $_SERVER['DOCUMENT_ROOT'].'/freight/views/Administrative/visitor-administrative/components/appoinment-request-edit.administrative.php');
    }else if(isset($visitor_request_id) && strval( $url)  === "/freight/administrative/visitor-dashboard/appointment-request/delete/$visitor_request_id"){

        return include( $_SERVER['DOCUMENT_ROOT'].'/freight/views/Administrative/visitor-administrative/components/appoinment-request-delete.administrative.php');
    }else if(isset($visitor_request_id) && strval( $url)  === "/freight/administrative/visitor-dashboard/appointment-request/qr-code/$visitor_request_id"){
        return include( $_SERVER['DOCUMENT_ROOT'].'/freight/views/Administrative/visitor-administrative/components/appoinment-request-qrcode.administrative.php');
    }else{
        return include( $_SERVER['DOCUMENT_ROOT'].'/freight/views/Administrative/pages/404.php');
    }


?>