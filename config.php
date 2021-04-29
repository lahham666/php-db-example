<?php

$server="localhost";
$user="root";
$password = "root";
$dbName = "test";




$conn = new mysqli($server,$user,$password,$dbName);

if ($conn -> connect_error)
{
    die("Connection Failed :".$conn -> connect_error);

}
else
echo "Connection was established successfully";

