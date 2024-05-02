<?php
$brand_id=$_GET['n'];
include ("connection.php");
$q="delete from brands WHERE brand_id=$brand_id";
mysqli_query($con,$q) or die(mysqli_error($con).$q);
header("location:viewBrand.php");
?>