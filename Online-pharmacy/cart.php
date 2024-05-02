<?php
session_start();
if (!isset($_SESSION["uid"])){
    header("location:index.php");
}
?>

<html>
<head>
    <title>VK PHARMACY</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="main.js"></script>
    <script src="js/jquery.js"></script>
</head>
<body>
<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <a href="index.php" class="navbar-brand">VK Pharmacy</a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="index.php"><span class="glyphicon glyphicon-home"></span>Home</a> </li>
            <li><a href="#"><span class="glyphicon glyphicon-modal-window"></span>Products</a> </li>
        </ul>
    </div>
</div>
<p><br/></p>
<p><br/></p>
<p><br/></p>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8" id="cart_msg">
<!--            Cart Message-->
        </div>
        <div class="col-md-2"></div>
    </div>
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="panel panel-primary">
                <div class="panel-heading">Cart Checkout</div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-2"><strong>Action</strong></div>
                        <div class="col-md-2"><strong>Product Image</strong></div>
                        <div class="col-md-2"><strong>Product Name</strong></div>
                        <div class="col-md-2"><strong>Quantity</strong></div>
                        <div class="col-md-2"><strong>Product Price</strong></div>
                        <div class="col-md-2"><strong>Price</strong></div>
                    </div>

                    <div id="cart_checkout">

                    </div>

                    </div>
                </div>
                <div class="panel-footer"></div>
            </div>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>
</body>
</html>