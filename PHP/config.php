<?php
  $hostname = "sql104.infinityfree.com";
  $username = "if0_36704033";
  $password = "XV3UFkEZno40E";
  $dbname = "if0_36704033_chitchat";

  $conn = mysqli_connect($hostname, $username, $password, $dbname);
  if(!$conn){
    echo "Database connection error".mysqli_connect_error();
  }
?>
