<?php

  // dj@lifesdk.com, 201808
  //error_reporting(E_ALL);

  define('host', 			'127.0.0.1');
  define('user', 			'root');
  define('password',		'');
  define('database',		'root');

  $conn = mysqli_connect(host, user, password, database) or die(mysqli_connect_error()) ;
  $connect = $conn;
  if(!isset($_POST['secure_code'])){exit;}else{
  	if(!$_POST['secure_code']=="password"){exit;}
  }
  if(!isset($_POST['sql'])){exit;}else{
    $_POST['sql'] = str_replace("\r","",$_POST['sql']);
    $_POST['sql'] = str_replace("\n"," ",$_POST['sql']);
    // mention here
  	mysqli_query($conn,"set names utf8");
    header('Content-Type: application/json; charset=utf-8');
  }

?>