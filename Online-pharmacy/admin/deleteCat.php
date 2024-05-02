<?php
$cat_id=$_GET['n'];
include ("connection.php");
$q="delete from categories WHERE cat_id=$cat_id";
mysqli_query($con,$q) or die(mysqli_error($con).$q);
header("location:viewCategory.php");
?>