<?php
/**
 * Created by PhpStorm.
 * User: malsheikh
 * Date: 12/18/2017
 * Time: 10:21 AM
 */

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "comp2";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
}