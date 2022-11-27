<?php

$_SESSION['timer'] = 60;


$start_timer = $_SESSION['timer_start'];
$current_time = $_SESSION['current_time'];

while($start_timer <= 0){
    $_SESSION['current_time'] = $start_timer -1;
    $start_timer = $_SESSION['current_time'];
}

$response = array(
    'timer'=>$start_timer ,
    'success'=>true
);

header('Content-Type: application/json; charset=utf-8');
echo json_encode($response);


