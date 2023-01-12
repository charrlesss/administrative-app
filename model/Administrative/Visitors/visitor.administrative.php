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
    $time = time();
    $db = $GLOBALS["db"];
    $visitor_id=$_SESSION["user_login_administrative"];
    $sql = "UPDATE `visitor-account` SET `profile`= '$profile',`gender`='$gender',
    `birthdate`='$birthdate',`address`=' $address',`country`='$country',
    `mb_number`='$mb_number',`visitor_acc_log`='$time'
     WHERE  `visitor_id` = '$visitor_id'";
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
      $gender,
      $id
    ){
      $time = time();
      $db = $GLOBALS["db"];
      $sql ="UPDATE `visitor-account` SET `visitor_acc_log`='$time',`fullname`='$fullname',`email`='$email',`gender`='$gender',`birthdate`='$birthdate',`address`='$address',`country`='$country',`mb_number`='$mb_number' WHERE `visitor_id` = '$id'";
      $db->query($sql);
    
    }



    function update_visitor_account_profile($profile,$id){
      $db = $GLOBALS["db"];
      $time = time();
      $sql ="UPDATE `visitor-account` SET `profile`='$profile',`visitor_acc_log`='$time' WHERE `visitor_id`='$id'";
      $db->query($sql);
    }

    function validateUserFromID($id){
      $db = $GLOBALS["db"];
      $sql ="SELECT * FROM  `visitor-account` WHERE `visitor_id` ='$id'";
      $isFind = $db->query($sql);
      $resultData = $isFind->fetch_assoc();
      return $resultData ;
    }
    function udpate_session($id){
      $session_out =false;
      $db = $GLOBALS["db"];
      $sql ="UPDATE  `visitor-account` SET `session_out`='$session_out' WHERE `visitor_id` ='$id'";
      $db->query($sql);
    }

    function update_visitor_history($id){
      $db = $GLOBALS["db"];
      $time = time();
      $sql ="INSERT INTO `update_info`(`user_id`, `updateAt`) VALUES ('$id','$time')"; 
      $db->query($sql);

  }
    
      

  function get_user_by_id_params($visitor_id){
    $db = $GLOBALS["db"];
    $sql ="SELECT `fullname`, `email`, `verify-email`,  `mb_number`,`createdAt`, `profile`, `gender`, `birthdate`, `address`, `country` FROM `visitor-account` WHERE `visitor_id` = '$visitor_id'";
    $isFind = $db->query($sql);
    if(!$isFind) return flase;

    $resultData = $isFind->fetch_assoc();
    return $resultData ;
  }


  function getAllVisitor(){
    $db = $GLOBALS["db"];
    $sql ="SELECT * FROM `visitor-account`";
    $result = $db->query($sql);
    $resultData = $result->fetch_all();
    return $resultData ;
  }


  function getVisitorFromId($visitor_id){
  $db = $GLOBALS["db"];
  $sql ="SELECT * FROM `visitor-account` WHERE `visitor_id` = '$visitor_id'";
  $visitor = $db->query($sql);

  $db = $GLOBALS["db"];
  $sql ="SELECT * FROM `login-history` WHERE `user_id` = '$visitor_id'";
  $login = $db->query($sql);

  $db = $GLOBALS["db"];
  $sql ="SELECT * FROM `logout-history` WHERE `user_id` = '$visitor_id'";
  $logout = $db->query($sql);

  $db = $GLOBALS["db"];
  $sql ="SELECT * FROM `update_info` WHERE `user_id` = '$visitor_id'";
  $update = $db->query($sql);

  return array(
  'visitor'=>$visitor->fetch_all(MYSQLI_ASSOC),
  'login'=>$login->fetch_all(MYSQLI_ASSOC),
  'logout'=>$logout->fetch_all(MYSQLI_ASSOC),
  'update'=>$update->fetch_all(MYSQLI_ASSOC)) ;
  }

