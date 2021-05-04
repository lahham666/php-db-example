<?php

include "config.php";

$t1 = $_GET["t1"];
$t2 = $_GET["t2"];
$t3 = $_GET["t3"];
$t4 = $_GET["t4"];

$sql = "insert into book values('" . $t1 . "','" . $t2 . "','" . $t3 . "','" . $t4 . "')";

    if ($conn->query($sql) === TRUE)
        echo "1 Row Added";
     else
         echo "0 Row Added";

         $conn->close();

/*

?>
<table border="1" width="50%">
    <tr bgcolor="yellow"> <th> Emp NO </th> <th> Ename </th> <th> SALARY </th> <th> Job </th> </tr>


<?php

$sql = "select * from book ";
$result = $conn->query($sql);

if ($result->num_rows > 0)
{

    while($row = $result->fetch_assoc())
    {
        echo "<tr align='center'><td>" . $row['eno'] . "</td>";
        echo "<td>" . $row['ename'] . "</td>";
        echo "<td>" . $row['sal'] . "</td>";
        echo "<td>" . $row['job'] . "</td> </tr>";
    }
}
else
{
   echo "No Row Selected";
}
   echo "</table>";

$conn->close();
*/