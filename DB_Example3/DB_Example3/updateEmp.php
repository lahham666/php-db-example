<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>


<body>
<div class="container">


        <h1> Search Employee:</h1>
        <form action="updateEmp.php" method="get">
            Empno: <input type="text" name="t1" class="form-control"> <br>
            <input type="submit" value="Search" class="btn btn-primary">
        </form>

        <?php
        if( isset($_GET["t1"]))
        {
            $t1 = $_GET["t1"];
            include "db.php";

            $sql = "select * from emp where eno = " . $t1;
            $result = $conn->query($sql);

            if ($result->num_rows > 0)
            {

                if($row = $result->fetch_assoc())
                {
           ?>
                 <h1> Change Employee Info:</h1>
                 <form action="updateEmp2.php" method="get">
           <?php

                    echo "Emp No <input type='text' value=". $row['eno']  ." name='t1' class='form-control' readonly> <br>";
                    echo "Emp Name <input type='text' value=". $row['ename']  ." name='t2' class='form-control'> <br>";
                    echo "Salary <input type='text' value=". $row['sal']  ." name='t3' class='form-control'> <br>";
                    echo "Position(Job) <input type='text' value=". $row['job']  ." name='t4'class='form-control'> <br>";

                    echo "<input type='submit' value='Update' class='btn btn-primary'>";
                    echo "</form>";

                }
            }
            else
            {
                echo "No Row Selected .... ";
            }
            $conn->close();
        }
        ?>


</div>

</body>



</html>



