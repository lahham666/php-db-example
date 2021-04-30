<?php


session_start();
if( isset($_SESSION['user'])  )
    echo "<font color='green' size=6>Welcome " . $_SESSION['user'] . "</font>";
else
    header("Location: login.php");


echo "<div class='container'>";
echo "<h1> Employee Information:</h1>";
echo "<table border='1' width='50%'>";
echo "<tr bgcolor='yellow'><th>Eno</th><th>Emp Name</th><th>Salary</th><th>Job</th></tr>";



include "db.php";

$sql = "select * from emp";
$result = $conn->query($sql);

if ($result->num_rows > 0)
{

    while($row = $result->fetch_assoc())
    {
        echo "<tr align='center'><td>" . $row['eno'] . "</td>";
        echo "<td>" . $row['ename'] . "</td>";
        echo "<td>" . $row['sal'] . "</td>";
        echo "<td>" . $row['job'] . "</td></tr>";
    }
}
else
{

}
$conn->close();
