<?php
$phar_id=$_GET['n'];
include ("connection.php");
$q="select * from pharmacist WHERE phar_id=$phar_id";
$res=mysqli_query($con,$q) or die(mysqli_error($con).$q);
$r=mysqli_fetch_array($res);
?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container-fluid">
    <nav class="navbar navbar-inverse">

        <div class="navbar-header">
            <a class="navbar-brand" href="dashboard.php">Dashbord</a>

            <ul class="nav navbar-nav">
                <li><a href="pharmacistAdd.php">Add </a></li>
                <li><a href="viewPharmacist.php">View </a></li>

            </ul>

            <ul class="nav navbar-nav navbar-right">

                <li><a href="form.php"><span class="glyphicon glyphicon-log-in"></span> Log Out</a></li>
            </ul>
        </div>

    </nav>

    <form class="form-horizontal" action="" method="post">

        <div class="form-group">
            <label class="control-label col-sm-2" for="Pharmacist ID">Pharmacist ID:</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="phar_id" placeholder="" name="phar_id" value="<?php echo $r["phar_id"];?>">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="Pharmacist Name">Pharmacist Name:</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="phar_name" placeholder="" name="phar_name" value="<?php echo $r["phar_name"];?>">
            </div>
        </div>


        <div class="form-group">
            <label class="control-label col-sm-2" for="Email">Email:</label>
            <div class="col-sm-6">
                <input type="email" class="form-control" id="email" placeholder="" name="email" value="<?php echo $r["email"];?>">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="User Name">User Name:</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="username" placeholder="" name="username" value="<?php echo $r["username"];?>">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="Phone No.">Phone No:</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="phone_no" placeholder="" name="phone_no" maxlength="10" value="<?php echo $r["phone_no"];?>">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="Qualification">Qualification:</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="qualification" placeholder="" name="qualification" value="<?php echo $r["qualification"];?>">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="Address">Address:</label>
            <div class="col-sm-6">
                <textarea class="form-control" id="address" name="address"><?php echo $r["address"];?></textarea>
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-6">
                <button type="submit" class="btn btn-default" name="update">Update</button>
            </div>
        </div>
    </form>
</div>

</body>
</html>

<?php
include "connection.php";
if (isset($_POST["update"]))
{
    $phar_id=$_REQUEST["phar_id"];
    $phar_name=$_REQUEST["phar_name"];
    $email=$_REQUEST["email"];
    $username=$_REQUEST["username"];
    $phone_no=$_REQUEST["phone_no"];
    $qualification=$_REQUEST["qualification"];
    $address=$_REQUEST["address"];

    echo $q = "update pharmacist set phar_name ='$phar_name', email='$email',username='$username',phone_no='$phone_no',qualification='$qualification',address='$address' where phar_id=$phar_id";
    mysqli_query($con, $q) or die(mysqli_error($con).$q);
    header("location:viewPharmacist.php");
}
?>