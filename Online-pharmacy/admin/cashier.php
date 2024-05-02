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
                <li ><a href="cashier.php">Add </a></li>
                <li><a href="viewCashier.php">View </a></li>

            </ul>

            <ul class="nav navbar-nav navbar-right">

                <li><a href="index.php"><span class="glyphicon glyphicon-log-in"></span> Log Out</a></li>
            </ul>
        </div>

    </nav>

    <form class="form-horizontal" action="" method="post">

        <div class="form-group">
            <label class="control-label col-sm-2" for="Cashier Name">Cashier Name:</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="cashier_name" placeholder="" name="cashier_name">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="Email">Email:</label>
            <div class="col-sm-6">
                <input type="email" class="form-control" id="email" placeholder="" name="email">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="Phone No.">Phone No:</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="phone_no" placeholder="" name="phone_no" maxlength="10">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="Address">Address:</label>
            <div class="col-sm-6">
                <textarea class="form-control" id="address" name="address"></textarea>
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-6">
                <button type="submit" class="btn btn-default" name="submit">Submit</button>
            </div>
        </div>
    </form>
</div>

</body>
</html>

<?php
include ("connection.php");

if(isset($_REQUEST["submit"]))
{
    $cashier_name=$_REQUEST["cashier_name"];
    $email=$_REQUEST["email"];
    $phone_no=$_REQUEST["phone_no"];
    $address=$_REQUEST["address"];

    echo $q="insert into cashier(cashier_name,email,phone_no,address) VALUES ('$cashier_name','$email','$phone_no','$address')";
    mysqli_query($con,$q) or die(mysqli_error($con).$q);
    echo "successfully registered";
}
?>