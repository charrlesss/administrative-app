
<?php

function insert_new_document( $tablename,$properties,$value){
  $db = $GLOBALS["db"];
    $result = false;
    $sql ="INSERT INTO `$tablename`$properties VALUES $value";
    if ($db->query($sql)) {
        $result = true;
        $db->close();
        return  $result;
      } else {
        echo "Error: " . $sql . "<br>" . $db->error;
        $db->close();
        return  $result;
      }
}

function find_by_email($tablename,$find){
  $db = $GLOBALS["db"];
  $result = false;
  $sql = "SELECT * FROM `$tablename` WHERE `email` = '$find'";
  $isFind = $db->query($sql);
  $resultData = $isFind->fetch_assoc();

  return $resultData ;
}

function edit_by_email(){
  $db = $GLOBALS["db"];
  $email = $_SESSION["verify-email-administrative"];
  $sql =  "UPDATE `visitor-account` SET `verify-email`='true', `verify-email-code`='' WHERE `email` = '$email'";
  $db->query($sql);
}

function delete_user_by_email(){
  $db = $GLOBALS["db"];
  $email = $_SESSION["verify-email-administrative"];
 $sql = "DELETE FROM `visitor-account` WHERE `email`= '$email'";
 $db->query($sql);
}

function edit_by_email_new_code($code){
  $db = $GLOBALS["db"];
  $email = $_SESSION["verify-email-administrative"];
  $sql =  "UPDATE `visitor-account` SET `verify-email-code`='$code' WHERE `email` = '$email'";
  $db->query($sql);
}


function login_account($id){
$db = $GLOBALS["db"];
$time = time();
 $sql= "INSERT INTO `login-history`(`loginAt`, `user_id`) VALUES ('$time','$id')";
 $db->query($sql);
}


function edit_by_email_password($email,$password){
  $db = $GLOBALS["db"];
  $sql =  "UPDATE `visitor-account` SET `password`='$password' WHERE `email` = '$email'";
  $db->query($sql);
}
