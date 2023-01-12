<?php


function getUserAdminByEmployeeId($employee_id ){
    $db = $GLOBALS["db"];   
   $sql=  "SELECT * FROM `user-mamagement-account` WHERE `employee_id`='$employee_id' ";
   $result = $db->query($sql);
    if(!$result)return '';
   $account =  $result->fetch_assoc();
   return $account;
}



function getUserAdminByAccountId($account_id ){
    $db = $GLOBALS["db"];   
   $sql=  "SELECT * FROM `user-mamagement-account` WHERE `account_id`='$account_id' ";
   $result = $db->query($sql);
    if(!$result)return '';
   $account =  $result->fetch_assoc();
   return $account;
}



function update_admin_account_profile($profile,$account_id){
    $db = $GLOBALS["db"];
    $time = time();
    $sql ="UPDATE `user-mamagement-account` SET `profile`='$profile',`user_mamagement_account_log`='$time' WHERE `account_id`='$account_id'";
    $db->query($sql);
  }


  function update_admin_account(
    $fullname,	
    $email,		
    $contact_number,		
    $country,		
    $birthdate,
    $address,		
    $gender,		
    $account_id		
  ){
    
    $time = time();
    $db = $GLOBALS["db"];
    $sql = "UPDATE `user-mamagement-account` SET `fullname`='$fullname',`email`='$email',
    `gender`='$gender',`address`='$address',`contact_number`='$contact_number',
    `country`='$country',`birthdate`='$birthdate',`user_mamagement_account_log`='$time' WHERE `account_id` ='$account_id'";   
    $db->query($sql);
    
  }

  function getAllAccounts(){
    $db = $GLOBALS["db"];
    $sql = "SELECT * FROM `user-mamagement-account`";
    $result = $db->query($sql);
    return $result->fetch_all(MYSQLI_ASSOC);
  }
	