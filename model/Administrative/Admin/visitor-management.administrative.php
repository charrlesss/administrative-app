<?php



function getInquirersParticipantsRecieverById($id){
    $db = $GLOBALS["db"];   
   $sql="SELECT `profile`,`fullname`, `message`,`from_id`,`to_id`,`message_createdat`,`seen`,`visitor_sender` FROM `visitor-account` ,`inquirers_room` where `from_id` = '$id'";
   $result = $db->query($sql);
   $inquirers =  $result->fetch_all(MYSQLI_ASSOC);
   return $inquirers;
}

function getInquirersParticipantsById($id){
    $db = $GLOBALS["db"];   
   $sql=  "SELECT  `profile`,`fullname`, `message`,`from_id`,`to_id`,`message_createdat`,`seen`,`visitor_management_sender`
    FROM `user-mamagement-account`
    JOIN `inquirers_room` ON `key` = `from_id` 
    WHERE `to_id` = '$id' ";
   $result = $db->query($sql);
   $inquirers =  $result->fetch_all(MYSQLI_ASSOC);
   return $inquirers;
}
function getInquirersParticipants(){
    $db = $GLOBALS["db"];   
    $sql=  "SELECT  *
    FROM `inquirers` ";

   $result = $db->query($sql);
   $inquirers =  $result->fetch_all(MYSQLI_ASSOC);
   return $inquirers;
}
function getInquirersParticipantsLastMessages($id){
    $db = $GLOBALS["db"];   
    $sql="SELECT `profile`,`fullname`,`message`,`seen`,`from_id`,`message_createdat` FROM `visitor-account` ,`inquirers_room` WHERE `visitor_id`='$id' AND `from_id` ='$id' ORDER BY `message_createdat`  DESC LIMIT 1";
   $result = $db->query($sql);
   $inquirers =  $result->fetch_all(MYSQLI_ASSOC);
   return $inquirers;
}

function updateSeenParticipantMessage($from_id){
    $db = $GLOBALS["db"];   
    $seen = true;
    $sql= "UPDATE `inquirers_room` SET `seen`='$seen' WHERE `from_id` ='$from_id' ";
    $db->query($sql);
    return $db->affected_rows;
}



function insertInquirersMessages(
    $message,
    $from_id,
    $to_id,
    $room_id
){
    $db = $GLOBALS["db"];
    $time = time();
    $seen = false;
    $visitor_sender = false;
    $visitor_management_sender = true;
    $sql= "INSERT INTO `inquirers_room`( `message`, `from_id`, `to_id`, `inquirers_room_id`,`message_createdat`,`seen`,`visitor_sender`,`visitor_management_sender`) 
   VALUES ('$message','$from_id','$to_id','$room_id','$time','$seen','$visitor_sender' ,'$visitor_management_sender')";
    $db->query($sql);
}


function findUserAccount($id){
    $db = $GLOBALS["db"];
    $sql=  "SELECT * FROM `inquirers` WHERE `sender_id` ='$id'"; 
    $result = $db->query($sql);
   $account =  $result->fetch_assoc();
   return $account;
}



function getAllMessagesOfVisitor($id,$key){
    $db = $GLOBALS["db"];
    $sql=  "SELECT * FROM `inquirers_room`
    JOIN  `visitor-account` ON `visitor_id` = '$id'
    WHERE `from_id` ='$id' AND `to_id` = '$key'"; 

    $result = $db->query($sql);
   $account =  $result->fetch_all(MYSQLI_ASSOC);
   return array('account'=>$account,'changes'=>$db->affected_rows);
}

function getAllMessagesOfVisitorManagement($key,$id){
    $db = $GLOBALS["db"];
    $sql=  "SELECT * FROM `inquirers_room`
    JOIN  `user-mamagement-account` ON `from_id` = '$key'
    WHERE `from_id` ='$key' AND `to_id` = '$id'"; 

    $result = $db->query($sql);
   $account =  $result->fetch_all(MYSQLI_ASSOC);
   return array('account'=>$account,'changes'=>$db->affected_rows);
}

function hasChangesInTable(){
    $db = $GLOBALS["db"];
   return $db->affected_rows;
}

function getAllVisitorAccount($status){
    $db = $GLOBALS["db"];
    $sql=  "SELECT * FROM `visitor-account` WHERE `deactivate` ='$status'"; 
    $result = $db->query($sql);
   return $result->fetch_all(MYSQLI_ASSOC);
}


function hasChangesVisitorAccountTable(){
    $db = $GLOBALS["db"];
    $sql=  "SELECT * FROM `visitor-account`  ORDER BY `visitor_id`  DESC LIMIT 1"; 
    $result = $db->query($sql);
   return $result->fetch_all(MYSQLI_ASSOC);
}


function affectVisitorAccountTable(){
    $db = $GLOBALS["db"];
    $sql=  "SELECT * FROM `visitor-account`"; 
    $result = $db->query($sql);
   return $db->affected_rows;
}



function hasChangesVisitorAppointmentTable(){
    $db = $GLOBALS["db"];
    $sql=  "SELECT * FROM `appointment-request-visitor-management` arvm JOIN `visitor-account` va ON arvm.visitor_id = va.visitor_id ORDER BY arvm.createdAt DESC LIMIT 1"; 
    $result = $db->query($sql);
   return $result->fetch_all(MYSQLI_ASSOC);
}

function affectVisitorAppointmentTable(){
    $db = $GLOBALS["db"];
    $sql=  "SELECT * FROM `appointment-request-visitor-management`"; 
    $result = $db->query($sql);
   return $db->affected_rows;
}



function updateStatus($status,$requestIdVM,$requestIdV){
    $db = $GLOBALS["db"];
    $sql=  "UPDATE `appointment-request-visitor-management` arvm, `visitor-appointment-request` var SET arvm.status='$status',var.status ='$status'
     WHERE arvm.`appointment-request-visitor-management_id` = '$requestIdVM' AND var.`visitor_request_id`='$requestIdV'"; 
    $result = $db->query($sql);
   return $db->affected_rows;
}

function getAppointmentFromVisitorRequestId($visitor_request_id){
    $db = $GLOBALS["db"];
    $sql=  "SELECT cvl.*, arvm.* FROM `appointment-request-visitor-management` arvm
    LEFT JOIN `company-visitor-log` cvl ON cvl.visitor_request_id = '$visitor_request_id'
    WHERE arvm.visitor_request_id = '$visitor_request_id'
    "; 
    $result = $db->query($sql);
    $request =  $result->fetch_assoc();
   return $request;
}

function addTimeInAppointmentFromVisitorRequestId($visitor_request_id){
    $db = $GLOBALS["db"];
    $time = time();
    $sql= "INSERT INTO `company-visitor-log`(`visitor_request_id`, `date_time_in`, `date_time_out`)
    VALUES ('$visitor_request_id','$time','')"; 
    $result = $db->query($sql);
}

function addTimeOutAppointmentFromVisitorRequestId($visitor_request_id){
    $db = $GLOBALS["db"];
    $time = time();
    $sql= "UPDATE `company-visitor-log` SET `date_time_out`='$time' WHERE `visitor_request_id`='$visitor_request_id'"; 
    $result = $db->query($sql);
}


function getAllVisitorAppointmentRequestActive($status){
    $db = $GLOBALS["db"];
    $sql=  "SELECT arvm.*,cvl.date_time_in,cvl.date_time_out,va.profile,va.mb_number
    FROM `appointment-request-visitor-management` arvm
     LEFT JOIN `company-visitor-log` cvl ON arvm.visitor_request_id = cvl.visitor_request_id
     JOIN `visitor-account` va ON arvm.visitor_id = va.visitor_id 
    WHERE `docu_status` = 'active' AND `status`='$status'"; 
    $result = $db->query($sql);
   return $result->fetch_all(MYSQLI_ASSOC);
}

function getAllVisitorAppointmentRequestDeactive(){
    $db = $GLOBALS["db"];
    $sql=  "SELECT arvm.*,cvl.date_time_in,cvl.date_time_out,va.profile
    FROM `appointment-request-visitor-management` arvm 
    LEFT JOIN `company-visitor-log` cvl ON arvm.visitor_request_id = cvl.visitor_request_id
    JOIN `visitor-account` va ON arvm.visitor_id = va.visitor_id WHERE `docu_status` = 'deactive' "; 
    $result = $db->query($sql);
   return $result->fetch_all(MYSQLI_ASSOC);
}
function getAppointmentParticipantsFromVisitorRequestId($visitor_request_id){
    $db = $GLOBALS["db"];
    $sql=  "SELECT * FROM `visitor-appointment-request-participants` 
    WHERE `visitor_request_id` = '$visitor_request_id'"; 
    $result = $db->query($sql);
    $request =  $result->fetch_assoc();
   return $request;
}

function createVisitorManagementHistory($m){
    $db = $GLOBALS["db"];
    $date_time = time();
    $seen = false;
    $sql = "INSERT INTO `visitor-management-history`(`message`, `seen`, `date-time`)
     VALUES ('$m','$seen','$date_time')";
    $db->query($sql);
}


function getVisitorManagementHistory(){
    $db = $GLOBALS["db"];
    $sql ="SELECT * FROM `visitor-management-history`";
    $result = $db->query($sql);
    return $result->fetch_all(MYSQLI_ASSOC);
}

function effectVisitorManagementTableHistory(){
    $db = $GLOBALS["db"];
    $time = time();
    $sql = "SELECT IFNULL(CAST(`date-time` AS INT),0) FROM `visitor-management-history` WHERE  `date-time` >='$time'";
    $result = $db->query($sql);
    return $db->affected_rows;
}

function seenVisitorManagementOneHistoryById($id){
    $db = $GLOBALS["db"];
    $seen = true;
    $sql ="UPDATE `visitor-management-history` SET `seen`='$seen' WHERE `visitor-management-history-id`= '$id'";
    $result = $db->query($sql);
}

function seenAllHistoryByIdVisitorManagement(){
    $db = $GLOBALS["db"];
    $seen = true;
    $sql ="UPDATE `visitor-management-history` SET `seen`='$seen' ";
    $result = $db->query($sql);
}

function updatVisitorPassword($pasword,$id){
    $db = $GLOBALS["db"];
    $session_out = true;
    $sql ="UPDATE `visitor-account` SET  `password`='$pasword', `session_out`='$session_out' WHERE `visitor_id` ='$id' ";
    $result = $db->query($sql);
}

function deactivateVisitorAccount($id){
    $db = $GLOBALS["db"];
    $deactivate = true;
    $sql ="UPDATE `visitor-account` SET `deactivate`='$deactivate' WHERE `visitor_id` ='$id' ";
    $result = $db->query($sql);
}

//affect

function affectVisitorRequestTimeInTimeOutLogTable(){
    $time = time();
    $db = $GLOBALS["db"];
    $sql= "SELECT IFNULL(CAST(`date_time_in` AS INT),0),IFNULL(CAST(`date_time_out` AS INT),0) FROM `company-visitor-log` WHERE  `date_time_in` >= '$time' OR `date_time_out` >= '$time'"; 
    $result = $db->query($sql);
   return $db->affected_rows;
}
function affectVisitorRequestUpdateAppointmentTable(){
    $time = time();
    $db = $GLOBALS["db"];
    $sql= "SELECT IFNULL(`vm_appointment_req_log`,0) FROM `appointment-request-visitor-management` WHERE  `vm_appointment_req_log` >= '$time'"; 
    $result = $db->query($sql);
   return $db->affected_rows;
}

function affectVisitorTable(){
    $time = time();
    $db = $GLOBALS["db"];
    $sql= "SELECT IFNULL(`visitor_acc_log`,0) FROM `visitor-account` WHERE  `visitor_acc_log` >= '$time'"; 
    $result = $db->query($sql);
   return $db->affected_rows;
}