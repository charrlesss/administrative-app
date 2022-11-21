<?php


require __DIR__ . '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$GLOBALS['url'] =   sprintf(
    '%s://%s%s',
    isset($_SERVER['HTTPS']) ? 'https' : 'http',
    $_SERVER['HTTP_HOST'],
   '/freight/'
  );

include_once(__DIR__.'/libraries/router.php');
include('./model/connect-db.administrative.php');
include('./config/routes.php');
















