<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>


<body>
<div class="container">


    <h1> Login Page:</h1>
    <form action="login.php" method="post">
        username: <input type="text" name="t1" class="form-control"> <br>
        password: <input type="password" name="t2" class="form-control"> <br>
        <input type="submit" value="Login" class="btn btn-success">
    </form>


    <?php
if(  isset($_POST['t1']) && isset($_POST['t2'])  ) {
    $t1 = $_POST['t1'];
    $t2 = $_POST['t2'];

    include "db.php";

    $sql = "select * from users where username = '" . $t1 . "' and password = '" . $t2 . "'" ;
    $result = $conn->query($sql);

    if ($result->num_rows > 0)
    {

        if($row = $result->fetch_assoc())
        {
            session_start();
            $_SESSION['user'] = $t1;
            header("Location: allEmp.php");
        }
    }
    else
    {
        echo "<div class='alert-danger'>Invalid Login</div>";
    }
    $conn->close();


}