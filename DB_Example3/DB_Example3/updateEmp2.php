<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>


<?php

if( isset($_GET["t2"]))
{
    $t1 = $_GET["t1"];
    $t2 = $_GET["t2"];
    $t3 = $_GET["t3"];
    $t4 = $_GET["t4"];

    include "db.php";
    // emp(eno, ename, sal, job)
    $sql = "update emp set ename = '" . $t2 . "', sal = " . $t3 . ",job = '" . $t4 . "'" ;
    $sql .= " where eno = " . $t1;

    if ($conn->query($sql) === TRUE)
        echo "<div class='alert-success'>1 row Changed</div>";
    else
        echo "<div class='alert-danger'>0 row Changed</div>";


}

?>


<div class='container'>

    <h1> Employee Info.</h1>
<table border='1' width='50%'>
<tr bgcolor='yellow'><th>Eno</th><th>Emp Name</th><th>Salary</th><th>Job</th></tr>


<?php
$sql = "select * from emp";
$result = $conn->query($sql);

if ($result->num_rows > 0)
{

    while($row = $result->fetch_assoc())
    {
        echo "<tr align='center'><td>" . $row['eno']  ."</td>";
        echo "<td>" . $row['ename']  ."</td>";
        echo "<td>" . $row['sal']  ."</td>";
        echo "<td>" . $row['job']  ."</td></tr>";
     }
     echo "</table>";
}
else
{

}
$conn->close();