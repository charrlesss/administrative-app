<?php


function get_compant_details(){
    $db = $GLOBALS["db"];
    $sql = "SELECT * FROM `company-details`";
    $result = $db->query($sql);
    $compant_details =  $result->fetch_all(MYSQLI_ASSOC);
    return $compant_details;
}


function get_compant_facility(){
    $db = $GLOBALS["db"];
    $sql = "SELECT * FROM `company-facility`";
    $result = $db->query($sql);
    $compant_facility =  $result->fetch_all(MYSQLI_ASSOC);
    return $compant_facility;
}

function get_compant_facility_by_id($facility_id){
    $db = $GLOBALS["db"];
    $sql = "SELECT * FROM `company-facility` WHERE  `facility_id`='$facility_id'";
    $result = $db->query($sql);
    $compant_facility =  $result->fetch_all(MYSQLI_ASSOC);
    return $compant_facility;
}


function get_compant_facility_amenities_by_id($id){
    $db = $GLOBALS["db"];
    $sql =" SELECT * FROM `facility_amenities` WHERE `facility_id` ='$id'";
    $fetch = $db->query($sql);
    $compant_facility_amenities = $fetch->fetch_all(MYSQLI_ASSOC);
    return  $compant_facility_amenities;
}
function get_compant_facility_services_by_id($id){
    $db = $GLOBALS["db"];
    $sql ="SELECT * FROM `facility_services` WHERE `facility_id` ='$id'";
    $fetch = $db->query($sql);
    $compant_facility_services = $fetch->fetch_all(MYSQLI_ASSOC);
    return $compant_facility_services;
}





