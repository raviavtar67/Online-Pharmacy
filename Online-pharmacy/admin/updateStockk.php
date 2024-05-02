<?php
include "connection.php";

    $pro_id = $_REQUEST["product_id"];
    $pro_title = $_REQUEST["product_title"];
    $pro_com = $_REQUEST["product_com"];
    $batch_no = $_REQUEST["batch_no"];
    $man_date = $_REQUEST["man_date"];
    $exp_date = $_REQUEST["exp_date"];
    $quantity = $_REQUEST["quantity"];
    $pro_price = $_REQUEST["product_price"];
    $pro_desc = $_REQUEST["product_desc"];
    $pro_keywords = $_REQUEST["product_keywords"];
    $dose = $_REQUEST["dose"];
	
	if (isset($_FILES['f']['name']) && $_FILES['f']['name']!==""){
	    $size=$_FILES['f']['size'];
	    $tmp=$_FILES['f']['tmp_name'];
	    $type=$_FILES['f']['type'];
	   $img=$_FILES['f']['name'];

	    //delete old pic
        //unlink("img/$oldImg");
        //new img upload
		$path="img/".$img;
        move_uploaded_file($tmp,$path);
    }
    else{
	    $img=$oldImg;
    }
    echo $q = "update products set product_image='$img',product_title ='$pro_title', product_com='$pro_com',batch_no='$batch_no',man_date='$man_date', exp_date='$exp_date',
    quantity='$quantity', product_price='$pro_price',product_desc='$pro_desc',product_keywords='$pro_keywords', dose='$dose' where product_id=$pro_id";
    mysqli_query($con, $q) or die(mysqli_error($con) . $q);
  header("location:viewStock.php");

?>