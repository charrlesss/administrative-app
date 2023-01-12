<?php
include( $_SERVER['DOCUMENT_ROOT'].'/freight/model/Administrative/Admin/user-management.administrative.php');

function authUser($employee_Id,$password,$callback){
    $user = getUserAdminByEmployeeId($employee_Id);
    $department = $user['department'];
    $link = '';
    if($department === 'visitor-management'){
      $link = '/freight/administrative/admin/visitor-management-dashboard/appointment-request';
    }else if($department === 'legal-management'){
      $link = '/freight/administrative/admin/legal-management-dashboard';
    }else if($department === 'document-management'){
      $link = '/freight/administrative/admin/document-management-dashboard/documents';
    }else if($department === 'facility-reservation'){
      $link = '/freight/administrative/admin/facility-reservation-dashboard';
    }else if($department === 'user-management'){
      $link = '/freight/administrative/admin/user-management-dashboard';
    }else{
      $link = '';
    }
    
    if($user === null){
        return  array(
          'message'=>"No employee found in this ID",
          'success'=>false
      ); 
    }

   if(password_verify($password,$user['password'])){

    return $callback($user,$link , $department );
   }else{
        return  array(
          'message'=>'Password do not match.',
          'success'=>false
      ); 
   }
}