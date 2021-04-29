<?php

$server="localhost";
$username="root";
$password="root";
$dbName="test";




$conn = new mysqli($server,$username,$password,$dbName);


if($conn -> connect_error)
{

die("Connection Failed".$conn -> connect_error);

}

?>