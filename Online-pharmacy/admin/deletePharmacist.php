<?php
echo $phar_id=$_GET['n'];
include ("connection.php");
$q="delete from pharmacist WHERE phar_id=$phar_id";
mysqli_query($con,$q) or die(mysqli_error($con).$q);
header("location:viewPharmacist.php");
?>