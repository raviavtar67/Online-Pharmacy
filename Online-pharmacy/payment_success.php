<?php
session_start();
if (!isset($_SESSION["uid"])){
    header("location:index.php");
}

$trx_id=$_GET['tx'];
$p_st=$_GET['st'];
$amt=$_GET['amt'];
$cc=$_GET['cc'];
$cm=$_GET['cm'];
if ($_COOKIE["ta"]==$amt && $p_st=="Completed" && $cm==$_SESSION["uid"]){
    echo "Everything is OK";
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
            <a href="#" class="navbar-brand">VK</a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="#"><span class="glyphicon glyphicon-home"></span>Home</a> </li>
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
                    <h1>ThankYou</h1>
                    <hr/>
                    <strong>Hello <?php echo $_SESSION["name"];?>, Your payment process is successfull completed you and your transaction is <strong><?php echo $trx_id;?></strong></strong><br>you can continue your Shopping<br></p>
                    <a href="index.php" class="btn btn-success btn-lg">Continue Shopping</a>
                </div>
                <div class="panel-footer"></div>
            </div>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>
</body>
</html>