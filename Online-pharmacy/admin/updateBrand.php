<?php
$brand_id=$_GET['n'];
include ("connection.php");
$q="select * from brands WHERE brand_id=$brand_id";
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
                <a class="navbar-brand" href="pharmacist.php">Dashbord</a>

                <ul class="nav navbar-nav navbar-right">

                    <li><a href="index.php"><span class="glyphicon glyphicon-log-in"></span> Log Out</a></li>
                </ul>
            </div>

        </nav>

        <form class="form-horizontal" enctype="multipart/form-data" method="post">

            <div class="form-group">
                <label class="control-label col-sm-2" for="Brand ID">Brand ID:</label>
                <div class="col-sm-6">
                    <input type="text" readonly class="form-control" id="brand_id" placeholder="" name="brand_id" value="<?php echo $r["brand_id"];?>">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="brand">Brands:</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="brand_title" placeholder="" name="brand_title" value="<?php echo $r["brand_title"];?>">
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
if (isset($_REQUEST['update'])) {
    $brand_id = $_REQUEST["brand_id"];
    $brand_title = $_REQUEST["brand_title"];

    $q = "update brands set brand_id='$brand_id',brand_title ='$brand_title' where brand_id=$brand_id";
    mysqli_query($con, $q) or die(mysqli_error($con) . $q);
    header("location:viewBrand.php");
}
?>