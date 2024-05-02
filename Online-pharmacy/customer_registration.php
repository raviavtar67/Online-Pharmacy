

<html xmlns="http://www.w3.org/1999/html">
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
        <div class="col-md-8" id="signup_msg">
            <!--Alert from signup from-->
        </div>
        <div class="col-md-2"></div>
    </div>
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="panel panel-primary">
                <div class="panel-heading">Customer Signup Form</div>
                <div class="panel-body">

                    <form method="post">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="f_name">First Name</label>
                            <input type="text"id="l_name" name="f_name" class="form-control">
                        </div>

                        <div class="col-md-6">
                            <label for="l_name">Last Name</label>
                            <input type="text" id="l_name" name="l_name" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label for="password">Password</label>
                            <input type="password" id="password" name="password" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label for="password">Confirm Password</label>
                            <input type="password" id="repassword" name="repassword" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label for="mobile">Mobile</label>
                            <input type="text" id="mobile" name="mobile" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label for="address1">Address Line 1</label>
                            <input type="text" id="address1" name="address1" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label for="address2">Address Line 2</label>
                            <input type="text" id="address2" name="address2" class="form-control">
                        </div>
                    </div>
                    <p><br/></p>
                    <div class="row">
                        <div class="col-md-12">
                            <input style="float: right;" value="Sign Up" type="button" id="signup_button" name="signup_button" class="btn btn-success btn-lg">
                        </div>
                    </div>
                </div>
            </form>
                <div class="panel-footer"></div>
            </div>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>
</body>
</html>