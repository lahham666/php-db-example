<?php

include "config.php";




$sql = "select * from book ";
$result = $conn->query($sql);

?>


<table border="1" width="50%">
    <tr bgcolor="yellow"> <th> Book Number </th> <th> Title </th> <th> Author </th> <th> Edition Year </th> </tr>





<?php


if ($result->num_rows > 0)
{

    while($row = $result->fetch_assoc())
    {
        echo "<tr align='center'><td>" . $row['no'] . "</td>";
        echo "<td>" . $row['title'] . "</td>";
        echo "<td>" . $row['author'] . "</td>";
        echo "<td>" . $row['eyear'] . "</td> </tr>";
    }
}
else
{
   echo "No Row Selected";
}
   echo "</table>";

$conn->close();



?>









