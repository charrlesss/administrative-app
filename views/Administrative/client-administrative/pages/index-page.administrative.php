<?php
    $url =  $_SERVER["REQUEST_URI"];
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
    }else if( strval( $url)  === "/freight/administrative/visitor-dashboard/company-facility/$facility_id"){
        return include( $_SERVER['DOCUMENT_ROOT'].'/freight/views/Administrative/client-administrative/pages/facility.administrative.php');
    }
    else{
        return include( $_SERVER['DOCUMENT_ROOT'].'/freight/views/Administrative/pages/404.php');
    }


?>