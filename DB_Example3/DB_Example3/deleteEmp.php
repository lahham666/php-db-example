<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>


<body>
<div class="container">

    <h1> Delete Employee</h1>
    <form action="deleteEmp.php" method="get">
        Empno: <input type="text" name="t1" class="form-control"> <br>
        <input type="submit" value="Delete" class="btn btn-danger">
    </form>
</div>


<?php
  if( isset($_GET["t1"]) )
  {
      $t1 = $_GET["t1"];
      include "db.php";

      $sql = "delete from emp where eno = " . $t1  ;

    if ($conn->query($sql) === TRUE)
        echo "<div class='alert-success'>1 row deleted</div>";
    else
        echo "<div class='alert-danger'>0 row deleted</div>";


$conn->close();
  }
?>


</body>

</html>



