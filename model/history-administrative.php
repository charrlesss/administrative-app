<?php
function createRequestAppointmentHistory($visitor_id){
$db = $GLOBALS["db"];
$date_time = time();
$sql = "INSERT INTO `history`( `visitor_id`, `date-time`, `message`) VALUES ('$visitor_id','$date_time','You are create a new appointment request.')";
$db->query($sql);
}