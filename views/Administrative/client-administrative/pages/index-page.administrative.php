<?php
    $url =  $_SERVER["REQUEST_URI"];
    ///freight/administrative/visitor-dashboard
    //freight/administrative/visitor-dashboard/inquirers
    //freight/administrative/visitor-dashboard/profile
    ///freight/administrative/visitor-dashboard/appoinment-request
    ///freight/administrative/visitor-dashboard/company-facility


    if( strval( $url)  === "/freight/administrative/visitor-dashboard"){
        return include( $_SERVER['DOCUMENT_ROOT'].'/freight/views/Administrative/client-administrative/pages/visitor-dashboard-page.administrative.php');
    }else if( strval( $url)  === "/freight/administrative/visitor-dashboard/profile"){
        return include( $_SERVER['DOCUMENT_ROOT'].'/freight/views/Administrative/client-administrative/pages/visitor-profile-page.administrative.php');
    }else if( strval( $url)  === "/freight/administrative/visitor-dashboard/inquirers"){
        return include( $_SERVER['DOCUMENT_ROOT'].'/freight/views/Administrative/client-administrative/pages/visitor-inquirers-page.administrative.php');
    }else if( strval( $url)  === "/freight/administrative/visitor-dashboard/appointment-request"){
        return include( $_SERVER['DOCUMENT_ROOT'].'/freight/views/Administrative/client-administrative/pages/visitor-appointment-request-page.administrative.php');
    }else if( strval( $url)  === "/freight/administrative/visitor-dashboard/company-facility"){
        return include( $_SERVER['DOCUMENT_ROOT'].'/freight/views/Administrative/client-administrative/pages/visitor-company-facility-page.administrative.php');
    }else{
        return include( $_SERVER['DOCUMENT_ROOT'].'/freight/views/Administrative/pages/404.php');
    }


?>