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
    <style>
        table tr td{padding: 10px;}
    </style>
</head>
<body>
<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <a href="index.php" class="navbar-brand">VK</a>
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
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading"></div>
                <div class="panel-body">
                    <h1>Customer Order Details</h1>
                    <hr/>
                    <div class="row">
                        <div class="col-md-6">
                            <img style="float: right; width: 150px; height: 200px;" src="img/82d46b94d4c393d9d3d192b4063eb1cd.png" class="img-thumbnail">
                        </div>
                        <div class="col-md-6">
                            <table>
                                <tr>
                                    <td>Product Name</td>
                                    <td><strong>Sony Camera</strong></td>
                                </tr>
                                <tr>
                                    <td>Product Price</td>
                                    <td><strong>4500</strong></td>
                                </tr>
                                <tr>
                                    <td>Quantity</td>
                                    <td><strong>3</strong></td>
                                </tr>
                                <tr>
                                    <td>Payment</td>
                                    <td><strong>Completed</strong></td>
                                </tr>
                                <tr>
                                    <td>Transaction Id</td>
                                    <td><strong>SERDFGH34567TRFGG</strong></td>
                                </tr>

                            </table>
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