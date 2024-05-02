<?php
echo $pro_id=$_GET['n'];
include ("connection.php");
$q="delete from products WHERE product_id=$pro_id";
mysqli_query($con,$q) or die(mysqli_error($con).$q);
header("location:viewStock.php");
?>