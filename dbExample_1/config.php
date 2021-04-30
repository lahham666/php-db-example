<?php

$server="localhost";
$user="root";
$pass="";
$dbName="test";

$conn = new mysqli($server, $user, $pass, $dbName);

if ($conn->connect_error)
  {
    die("Connection failed: " . $conn->connect_error);
  }

  else
  echo "Connection was established successfully";



?>