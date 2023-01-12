<?php
include( $_SERVER['DOCUMENT_ROOT'].'/freight/model/Administrative/Visitors/visitor.administrative.php');
$user = validateUserFromID($_SESSION["user_login_administrative"]);

if(!empty($user['deactivate'])){
    session_destroy();
    any('/404','views/Administrative/pages/deactive.php');
    return;
}
if(!empty($user['session_out'])){
    session_destroy();
    any('/404','views/Administrative/pages/session-out.php');
    return;
}
?>