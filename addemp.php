<?php

include "config.php";


$empName=$_POST['Nam'];

$sql = "insert into employees (eName) values('".$empName."')";


if ($conn->query($sql) === TRUE)
echo "1 Row Added";
else
 echo "0 Row Added";

$conn->close();






?>