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

            <ul class="nav navbar-nav">
                <li ><a href="medicineManagement.php">Add </a></li>
                <li><a href="viewStock.php">View </a></li>

            </ul>

            <ul class="nav navbar-nav navbar-right">

                <li><a href="index.php"><span class="glyphicon glyphicon-log-in"></span> Log Out</a></li>
            </ul>
        </div>

</nav>

<form class="form-horizontal" action="" enctype="multipart/form-data" method="post">
    <div class="form-group">
        <label class="control-label col-sm-2" for="Medicine Img">Medicine Image:</label>
        <div class="col-sm-6">
            <input type="file" class="form-control" id="med_img" placeholder="" name="f">
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-2" for="Medicine Name">Medicine Name:</label>
        <div class="col-sm-6">
            <input type="text" class="form-control" id="med_name" placeholder="" name="product_title">
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-2" for="Company Name">Company Name:</label>
        <div class="col-sm-6">
            <input type="text" class="form-control" id="com_name" placeholder="" name="product_com">
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
        <label class="control-label col-sm-2" for="Company Name">Categories:</label>
        <div class="col-sm-9">
            <select class="from-control" name="cat_id">
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
            <input type="text" class="form-control" id="batch_no" placeholder="" name="batch_no">
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-2" for="Manufacturing Date">Manufacturing Date:</label>
        <div class="col-sm-6">
            <input type="date" class="form-control" id="man_date" placeholder="" name="man_date">
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-2" for="Expiration Date">Expiration Date:</label>
        <div class="col-sm-6">
                <input type="date" class="form-control" id="exp_date" placeholder="" name="exp_date">
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-2" for="Quantity">Quantity:</label>
        <div class="col-sm-6">
            <input type="text" class="form-control" id="quantity" placeholder="" name="quantity">
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-2" for="Price">Price:</label>
        <div class="col-sm-6">
            <input type="text" class="form-control" id="price" placeholder="" name="product_price">
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-2" for="Description">Description:</label>
        <div class="col-sm-6">
            <textarea class="form-control" id="description" name="product_desc"></textarea>
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-2" for="Description">Keywords:</label>
        <div class="col-sm-6">
            <textarea class="form-control" id="description" name="product_keywords"></textarea>
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-2" for="Dose">Dose:</label>
        <div class="col-sm-6">
            <input type="text" class="form-control" id="dose" placeholder="" name="dose">
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
    echo $med_img=$_FILES["f"]["name"];
    echo $med_imgt=$_FILES['f']['tmp_name'];
    echo $e=$_FILES["f"]["error"];
    $path="img/".$med_img;
    move_uploaded_file($med_imgt,$path);

    $pro_title=$_REQUEST["product_title"];
    $pro_com=$_REQUEST["product_com"];
    $batch_no=$_REQUEST["batch_no"];
    $man_date=$_REQUEST["man_date"];
    $exp_date=$_REQUEST["exp_date"];
    $quantiy=$_REQUEST["quantity"];
    $pro_price=$_REQUEST["product_price"];
	$pro_desc=$_REQUEST["product_desc"];
    $pro_keywords=$_REQUEST["product_keywords"];
    $dose=$_REQUEST["dose"];
    $q="insert into products(product_image,product_title,product_com,batch_no,man_date,exp_date,quantity,product_price,product_desc,product_keywords,dose) VALUES 
    ('$med_img','$pro_title','$pro_com','$batch_no','$man_date','$exp_date','$quantiy','$pro_price','$pro_desc','$pro_keywords','$dose')";
    mysqli_query($con,$q) or die(mysqli_error($con).$q);
    echo "successfully registered";
}
?>