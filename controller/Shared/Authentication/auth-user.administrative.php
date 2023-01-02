<?php
include( $_SERVER['DOCUMENT_ROOT'].'/freight/model/Administrative/Admin/visitor-management.administrative.php');

function authUser($employee_Id,$password,$department,$callback){
    $user = getUserAdminByEmployeeId($employee_Id,$department);
    $link = '';
    if($department === 'visitor-management'){
      $link = '/freight/administrative/admin/visitor-management-dashboard';
    }else if($department === 'legal-management'){
      $link = '/freight/administrative/admin/legal-management-dashboard';
    }else if($department === 'document-management'){
      $link = '/freight/administrative/admin/document-management-dashboard';
    }else if($department === 'facility-reservation'){
      $link = '/freight/administrative/admin/facility-reservation-dashboard';
    }

    if($user === null){
        return  array(
          'message'=>"No employee ID found in $department",
          'success'=>false
      ); 
    }

   if(password_verify($password,$user['password'])){
    return $callback($user,$link);
   }else{
        return  array(
          'message'=>'Password do not match.',
          'success'=>false
      ); 
   }
}