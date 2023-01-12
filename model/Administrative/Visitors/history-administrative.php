<?php
function createRequestAppointmentHistory($visitor_id,$message){
    $db = $GLOBALS["db"];
    $date_time = time();
    $seen = false;
    $sql = "INSERT INTO `history`( `visitor_id`, `date-time`, `message`,`seen`) VALUES ('$visitor_id','$date_time','$message','$seen')";
    $db->query($sql);
}

function getHistoryById($visitor_id){
    $db = $GLOBALS["db"];
    $sql = "SELECT * FROM `history` WHERE `visitor_id` ='$visitor_id'";
    $result = $db->query($sql);
    $requestCreated =  $result->fetch_all(MYSQLI_ASSOC);
    return $requestCreated;
}


function seenOneHistoryById($visitor_id,$history_id){
    $db = $GLOBALS["db"];
    $seen = true;
    $sql = "UPDATE `history` SET `seen`='$seen' WHERE `visitor_id` ='$visitor_id' AND `history_id` = '$history_id'";
    $result = $db->query($sql);
}

function seenAllHistoryById($visitor_id){
    $db = $GLOBALS["db"];
    $seen = true;
    $sql = "UPDATE `history` SET `seen`='$seen' WHERE `visitor_id` ='$visitor_id' ";
    $result = $db->query($sql);
}

function effectTableHistory($visitor_id){
    $db = $GLOBALS["db"];
    $sql = "SELECT * FROM `history` WHERE `visitor_id` ='$visitor_id'";
    $result = $db->query($sql);
    return $db->affected_rows;
}