<?php
echo $cashier_id=$_GET['n'];
include ("connection.php");
$q="delete from cashier WHERE cashier_id=$cashier_id";
mysqli_query($con,$q) or die(mysqli_error($con).$q);
header("location:viewCashier.php");
?>