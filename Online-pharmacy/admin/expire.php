<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        table,th{
            text-align: center;
        }
    </style>
</head>
<body>

<div class="container-fluid">
    <nav class="navbar navbar-inverse">

        <div class="navbar-header">
            <a class="navbar-brand" style="padding-top: 22px; font-size: large;" href="pharmacist.php">Dashbord</a>
        </div>


        <ul class="nav navbar-nav navbar-right">

            <li style="font-size: large;margin-right: 10px;padding-top: 5px;" ><a href="index.php"><span class="glyphicon glyphicon-log-in"></span> Log Out</a></li>
        </ul>

    </nav>


</div>
<table class="table table-bordered"  >
<tr style="font-size: 20px; text-align: center">
    <th>Id</th>
    <th>Image</th>
    <th>Medicine</th>
    <th>Man Date</th>
    <th>Exp Date</th>
    <th>Expire or Not</th>
</tr>
<?php
include 'connection.php';
$q="select * from products";
$r=mysqli_query($con,$q);
while ($row=mysqli_fetch_array($r)){
    echo "<tr align='center'>";
    $man=$row['man_date'];
    $exp=$row['exp_date'];
    $id=$row['product_id'];
    $title=$row['product_title'];
    $img=$row['product_image'];

    if ($man>$exp){
        echo "<td>$id</td><td><img src='img/$img'></td><td>$title</td><td>$man</td><td>$exp</td><td><strong>EXPIRE</strong></td>";
    }

    else{
        echo "<td>$id</td><td><img src='img/$img'></td><td>$title</td><td>$man</td><td>$exp</td><td><strong>NOT EXPIRE</strong></td>";
    }
    echo "</tr>";
}
?>
</table>
</body>
</html>
