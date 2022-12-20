<?php


function getKeyAccountVisitorManagement(){
    $db = $GLOBALS["db"];
   $sql=  "SELECT * FROM `user-mamagement-account`";
   $result = $db->query($sql);
   $account =  $result->fetch_assoc();
   return $account;
}
function getAccountVisitorManagement($room_id){
    $db = $GLOBALS["db"];
   $sql=  "SELECT * FROM `user-mamagement-account` WHERE `room_id` ='$room_id'";
   $result = $db->query($sql);
   $account =  $result->fetch_assoc();
   return $account;
}