
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">

<h1> Add Employee </h1>

<?php
$t1 = $_GET["t1"];
$t2 = $_GET["t2"];
$t3 = $_GET["t3"];
$t4 = $_GET["t4"];

include "db.php";

$sql = "insert into emp values(" . $t1 . ",'". $t2 . "',". $t3 . ",'". $t4 . "')";

    if ($conn->query($sql) === TRUE)
        echo "<div class='alert-success'>1 row added</div>";
     else
         echo "<div class='alert-danger'>0 row added</div>";





echo "<div class='container'>";
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


echo "</div>";
