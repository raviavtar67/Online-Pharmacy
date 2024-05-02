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
                <li ><a href="stockmanagement.php">Add </a></li>
                <li><a href="viewStock.php">View </a></li>

            </ul>

            <ul class="nav navbar-nav navbar-right">

                <li><a href="index.php"><span class="glyphicon glyphicon-log-in"></span> Log Out</a></li>
            </ul>
        </div>

    </nav>
<table class="table table-bordered">
    <th>Medicine ID</th>
    <th>Medicine Image</th>
    <th>Medicine Name</th>
    <th>Company Name</th>
    <th>Category</th>
    <th>Brand</th>
    <th>Btach Number</th>
    <th>Manufacturing date</th>
    <th>Expire Date</th>
    <th>Quantity</th>
    <th>Unit Price</th>
    <th>Description</th>
    <th>Keywords</th>
    <th>Dose</th>

    <?php
    include ("connection.php");
    $q="select * from products,brands where products.brand_id=brands.brand_id order by products.product_id";
    $res=mysqli_query($con,$q) or die(mysqli_error($con).$q);
    while($r=mysqli_fetch_array($res))
    {
        ?>
        <tr>
            <td><?php echo $r[0];?></td>
            <td><img src="img/<?php echo $r["product_image"];?>" height="100px" width="100px"></td>

            <td><?php echo $r["product_title"];?></td>
            <td><?php echo $r["product_com"];?></td>
            <td><?php echo $r["cat_id"];?></td>
            <td><?php echo $r["brand_title"];?></td>
            <td><?php echo $r["batch_no"];?></td>

            <td><?php echo $r["man_date"];?></td>
            <td><?php echo $r["exp_date"];?></td>
            <td><?php echo $r["quantity"];?></td>
            <td><?php echo $r["product_price"];?></td>
            <td><?php echo $r["product_desc"];?></td>
            <td><?php echo $r["product_keywords"];?></td>
            <td><?php echo $r["dose"];?></td>

            <td><a href="deleteStock.php?n=<?php echo $r["product_id"];?>" ><img src="img/delete.png" height="50px" width="50px"/> </a></td>
            <td><a href="updateStock.php?n=<?php echo $r["product_id"];?>" ><img src="img/Update-icon.png" height="50px" width="50px"/> </a> </td>
        </tr>
        <?php
    }
    ?>
</table>
</div>
</body>
</html>
