<?php
function get_user_by_id(){
    $db = $GLOBALS["db"];
    $visitor_id=$_SESSION["user_login_administrative"];
    $sql ="SELECT `fullname`, `email`, `verify-email`, `createdAt`, `profile`, `gender`, `birthdate`, `address`, `country` FROM `visitor-account` WHERE `visitor_id` = '$visitor_id'";
    $isFind = $db->query($sql);
    $resultData = $isFind->fetch_assoc();
    return $resultData ;
  }