<?php
session_start();
if (isset($_SESSION["uid"])){
    header("location:profile.php");
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
            <li style="width:300px;left: 10px;top: 10px; "><input type="text" class="form-control" id="search"></li>
            <li style="top:10px;left: 20px;"><button class="btn btn-primary" id="search_btn">Search</button></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="#"  class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-shopping-cart"></span>Cart<span class="badge">0</span></a>
            <div class="dropdown-menu" style="width: 400px">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-3">S No.</div>
                            <div class="col-md-3">Image</div>
                            <div class="col-md-3">Name</div>
                            <div class="col-md-3">Price</div>
                        </div>
                    </div>
                    <div class="panel-body"></div>
                    <div class="panel-footer"></div>
                </div>
            </div>
            </li>
            <li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span>SignIn</a>
            <ul class="dropdown-menu">
                <div style="width: 300px">
                    <div class="panel panel-primary">
                        <div class="panel-heading">LOGIN</div>
                        <div class="panel-heading">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" required/>
                            <label for="email">Password</label>
                            <input type="password" class="form-control" id="password" required/>
                            <p><br/></p>
                            <a href="#" style="color: white;list-style: none;">Forgotten Passowrd</a><input type="submit" class="btn btn-success" style="float: right;" id="login" value="Login">

                        </div>
                        <div class="panel-footer" id="e_msg"></div>
                    </div>
                </div>
            </ul>
            </li>
            <li><a href="customer_registration.php"><span class="glyphicon glyphicon-user"></span>SignUp</a> </li>
        </ul>
    </div>
</div>

<p><br/></p>
<p><br/></p>
<p><br/></p>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-2">
            <div id="get_category">

            </div>

            <div id="get_brand">

            </div>

        </div>
        <div class="col-md-8">
            <div class="row">
                <div class="col-md-12" id="product_msg"></div>
            </div>
            <div class="panel panel-info">
                <div class="panel-heading">Products</div>
                <div class="panel-body">
                    <div id="get_product">

                    </div>

                </div>
                <div class="panel-footer">&copy; 2018</div>
            </div>
        </div>
        <div class="col-md-1"></div>
    </div>
</div>
</body>
</html>
