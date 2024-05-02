<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body background="img/medicine-pills_00408310.jpg" style="background-attachment: fixed; background-size: cover">
<div class="container">
    <h2 style="padding-left: 400px; padding-top: 200px;">Admin LogIn</h2>
    <form class="form-horizontal" style="padding-top: 10px; padding-left: 400px;" method="post">

        <div class="form-group">
            <div class="col-sm-6">
                <input type="text" class="form-control" id="name" placeholder="User Name" name="username">
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-6">
                <input type="password" class="form-control" id="pwd" placeholder="Password" name="password">
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-6">
                <button type="submit" class="btn btn-default" name="login">Submit</button>
            </div>
        </div>
    </form>


</div>
</body>
</html>

<?php
include "connection.php";
$q="select * from admin";
$res=mysqli_query($con,$q) or die(mysqli_error($con).$q);
$r=mysqli_fetch_array($res);
if (isset($_POST["login"]))
{
    $username=$_POST["username"];
    $password=$_POST["password"];
    if ($username==$r[1] && $password==$r[2])
    {
        $_SESSION["sn"]=$username;
        header("location:dashboard.php");
    }
    else{
       echo '<script>alert ("check your usename or password")</script>';
    }
}

?>


<!--https://www.netmeds.com-->
