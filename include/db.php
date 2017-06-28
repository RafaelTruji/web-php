<?php
  $server = 'localhost';
  $user = 'rafa';
  $password = 'php';
  $db = 'php_course';

  $conn = mysqli_connect($server,$user,$password,$db);

  if(!$conn){
    die("Connection failed:" . mysqli_connect_error());
  }
?>
