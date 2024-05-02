<?php
$pro_id=$_GET['n'];
include ("connection.php");
$q="select * from products WHERE product_id=$pro_id";
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

    <form class="form-horizontal" action="updateStockk.php" enctype="multipart/form-data" method="post">

        <div class="form-group">
            <label class="control-label col-sm-2" for="Medicine ID">Medicine ID:</label>
            <div class="col-sm-6">
                <input type="text" readonly class="form-control" id="med_id" placeholder="" name="product_id" value="<?php echo $r["product_id"];?>">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="Medicine Img">Medicine Image:</label>
            <div class="col-sm-6">
                <img src="img/<?php echo $r["product_image"];?>" height="100px" width="100px">
				<input type="file" name="f"/>
                
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="Medicine Name">Medicine Name:</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="med_name" placeholder="" name="product_title" value="<?php echo $r["product_title"];?>">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="Company Name">Company Name:</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="com_name" placeholder="" name="product_com" value="<?php echo $r["product_com"];?>">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="Company Name">Brands:</label>
            <div class="col-sm-9">
                <select class="from-control" name="brand_id">
                    <?php
                    include "connection.php";
                    $result = mysqli_query($con,"select * from brands");
                    while($row = mysqli_fetch_array($result))
                    {

                        $id = $row['brand_id'];
                        $title = $row['brand_title'];
                        echo "<option value='$id'>".$title."</option>";
                    }
                    ?>
                </select>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="Company Name">Category:</label>
            <div class="col-sm-9">
                <select class="from-control" name="brand_id">
                    <?php
                    include "connection.php";
                    $result = mysqli_query($con,"select * from categories");
                    while($row = mysqli_fetch_array($result))
                    {

                        $id = $row['cat_id'];
                        $title = $row['cat_title'];
                        echo "<option value='$id'>".$title."</option>";
                    }
                    ?>
                </select>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="Batch No.">Batch No:</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="batch_no" placeholder="" name="batch_no" value="<?php echo $r["batch_no"];?>">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="Manufacturing Date">Manufacturing Date:</label>
            <div class="col-sm-6">
                <input type="date" class="form-control" id="man_date" placeholder="" name="man_date" value="<?php echo $r["man_date"];?>">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="Expiration Date">Expiration Date:</label>
            <div class="col-sm-6">
                <input type="date" class="form-control" id="exp_date" placeholder="" name="exp_date" value="<?php echo $r["exp_date"];?>">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="Quantity">Quantity:</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="quantity" placeholder="" name="quantity" value="<?php echo $r["quantity"];?>">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="Price">Price:</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="price" placeholder="" name="product_price" value="<?php echo $r["product_price"];?>">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="Description">Description:</label>
            <div class="col-sm-6 overflow" >
                <textarea class="form-control" id="description" name="product_desc" style="height: 100px; overflow: scroll;"><?php echo $r["product_desc"];?></textarea>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="Description">Keywords:</label>
            <div class="col-sm-6 overflow" >
                <textarea class="form-control" id="description" name="product_keywords" style="height: 100px; overflow: scroll;"><?php echo $r["product_keywords"];?></textarea>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="Dose" >Dose:</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="dose" placeholder="" name="dose" value="<?php echo $r["dose"];?>">
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
//include "connection.php";
//if (isset($_POST["update"]))
//{
//    $med_id = $_REQUEST["med_id"];
//    $med_name = $_REQUEST["med_name"];
//    $com_name = $_REQUEST["com_name"];
//    $batch_no = $_REQUEST["batch_no"];
//    $man_date = $_REQUEST["man_date"];
//    $exp_date = $_REQUEST["exp_date"];
//    $quantiy = $_REQUEST["quantity"];
//    $price = $_REQUEST["price"];
//    $description = $_REQUEST["description"];
//    $dose = $_REQUEST["dose"];
//    echo $q = "update medicine set med_name ='$med_name', com_name='$com_name',batch_no='$batch_no',man_date='$man_date', exp_date='$exp_date',
//    quantity='$quantiy', price='$price',description='$description', dose='$dose' where med_id=$med_id";
//    mysqli_query($con, $q) or die(mysqli_error($con) . $q);
//    header("location:viewStock.php");
//}
//?>