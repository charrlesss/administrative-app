<?php
function get_user_by_id(){
    $db = $GLOBALS["db"];
    $visitor_id=$_SESSION["user_login_administrative"];
    $sql ="SELECT `fullname`, `email`, `verify-email`,  `mb_number`,`createdAt`, `profile`, `gender`, `birthdate`, `address`, `country` FROM `visitor-account` WHERE `visitor_id` = '$visitor_id'";
    $isFind = $db->query($sql);
    if(!$isFind) return flase;

    $resultData = $isFind->fetch_assoc();
    return $resultData ;
  }


  function complte_info_by_id(
    $profile,
    $gender,
    $address,
    $country,
    $mb_number,
    $birthdate
  ){
    $db = $GLOBALS["db"];
    $visitor_id=$_SESSION["user_login_administrative"];
    $sql = "UPDATE `visitor-account` SET `profile`= '$profile',`gender`='$gender',`birthdate`='$birthdate',`address`=' $address',`country`='$country',`mb_number`='$mb_number' WHERE  `visitor_id` = '$visitor_id'";
    $db->query($sql);
  }


  function logout_account($id){
    $db = $GLOBALS["db"];
    $time = time();
     $sql= "INSERT INTO `logout-history`(`logoutAt`, `user_id`) VALUES ('$time','$id')";
     $db->query($sql);
    }
    


    function update_visitor_account(
      $fullname,
      $email,
      $mb_number,
      $country,
      $birthdate,
      $address,
      $gender
    ){
      $db = $GLOBALS["db"];
      $id=$_SESSION["user_login_administrative"];
      $sql ="UPDATE `visitor-account` SET `fullname`=' $fullname',`email`='$email',`gender`='$gender',`birthdate`='$birthdate',`address`='$address',`country`='$country',`mb_number`='$mb_number' WHERE `visitor_id` = '$id'";
      $db->query($sql);
    
    }


    function update_visitor_account_profile($profile){
      $db = $GLOBALS["db"];
      $id=$_SESSION["user_login_administrative"];

      $sql ="UPDATE `visitor-account` SET `profile`='$profile' WHERE `visitor_id`='$id'";
      $db->query($sql);
    }


    function update_visitor_history(){
      $db = $GLOBALS["db"];
      $time = time();
      $id=$_SESSION["user_login_administrative"];
      $sql ="INSERT INTO `update_info`(`user_id`, `updateAt`) VALUES ('$id','$time')"; 
      $db->query($sql);

  }
    
      
