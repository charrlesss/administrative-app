<?php

$servername = $_ENV['DB_SERVER_NAME'];
$username =  $_ENV["USER_NAME"];
$password = $_ENV['PASSWORD'];
$dbname =$_ENV['DB_NAME'];

$db = new mysqli($servername, $username, $password ,$dbname);

if ($db->connect_error) {
  die("Connection failed: " . $db->connect_error);
}

$GLOBALS['db'] = $db;

?>