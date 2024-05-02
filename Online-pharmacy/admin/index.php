<?php
include 'connection.php';
if(isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $position = $_POST['position'];
    switch ($position) {
        case 'Admin':
            $result = mysqli_query($con, "SELECT id, username FROM admin WHERE username='$username' AND password='$password'");
            $row = mysqli_fetch_array($result);
            if ($row > 0) {
                session_start();
                $_SESSION['id'] = $row[0];
                $_SESSION['username'] = $row[1];
                $_SESSION['password'] = $row[2];
                header("location:dashboard.php");
            }
            else {
                echo '<script>alert ("check your usename or password")</script>';
            }
            break;
        case 'Pharmacist':
            $result = mysqli_query($con, "SELECT id, username FROM pharmacist_login WHERE username='$username' AND password='$password'");
            $row = mysqli_fetch_array($result);
            if ($row > 0) {
                session_start();
                $_SESSION['id'] = $row[0];
                $_SESSION['username'] = $row[1];
                $_SESSION['password'] = $row[2];
                header("location:pharmacist.php");
            } else {
                echo '<script>alert ("check your usename or password")</script>';
            }
            break;
        case 'Cashier':
            $result = mysqli_query($con, "SELECT cashier_id, first_name,last_name,staff_id,username FROM cashier WHERE username='$username' AND password='$password'");
            $row = mysqli_fetch_array($result);
            if ($row > 0) {
                session_start();
                $_SESSION['cashier_id'] = $row[0];
                $_SESSION['first_name'] = $row[1];
                $_SESSION['last_name'] = $row[2];
                $_SESSION['staff_id'] = $row[3];
                $_SESSION['username'] = $row[4];
                header("location:http://" . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . "/cashier.php");
            } else {
                echo '<script>alert ("check your usename or password")</script>';
            }
            break;

    }
}
echo <<<LOGIN

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body background="img/medicine-pills_00408310.jpg" style=" background-attachment: fixed; background-size: cover">
<div class="container">
    <h2 style="padding-left: 400px; padding-top: 200px;">LogIn</h2>
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
		<select name="position" style="width: 354px; height: 35px; border-radius: 5px; padding: 8px;text-align: center;border-color: gainsboro">
		<option >--Select position--</option>
			<option>Admin</option>
			<option>Pharmacist</option>
			<option>Cashier</option>
			
			</select>
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

LOGIN;
?>
<!--https://www.netmeds.com-->

<!--https://www.medplusmart.com/-->
