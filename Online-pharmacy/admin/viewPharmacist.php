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
            <a class="navbar-brand" href="dashboard.php">Dashbord</a>

            <ul class="nav navbar-nav">
                <li ><a href="pharmacistAdd.php">Add </a></li>
                <li><a href="viewPharmacist.php">View </a></li>

            </ul>

            <ul class="nav navbar-nav navbar-right">

                <li><a href="index.php"><span class="glyphicon glyphicon-log-in"></span> Log Out</a></li>
            </ul>
        </div>

    </nav>
    <table class="table table-bordered">
        <th>Pharmacist ID</th>

        <th>Pharmacist Name</th>
        <th>Email</th>
        <th>User Name</th>
        <th>Phone NO.</th>
        <th>Qualification</th>
        <th>Address</th>


        <?php
        include ("connection.php");
        $q="select * from pharmacist";
        $res=mysqli_query($con,$q) or die(mysqli_error($con).$q);
        while($r=mysqli_fetch_array($res))
        {
            ?>
            <tr>
                <td><?php echo $r[0];?></td>
                <td><?php echo $r["phar_name"];?></td>
                <td><?php echo $r["email"];?></td>
                <td><?php echo $r["username"];?></td>
                <td><?php echo $r["phone_no"];?></td>
                <td><?php echo $r["qualification"];?></td>
                <td><?php echo $r["address"];?></td>

                <td><a href="deletePharmacist.php?n=<?php echo $r["phar_id"];?>" ><img src="img/delete.png" height="50px" width="50px"/> </a></td>
                <td><a href="updatePharmacist.php?n=<?php echo $r["phar_id"];?>" ><img src="img/Update-icon.png" height="50px" width="50px"/></a> </td>
            </tr>
            <?php
        }
        ?>
    </table>
</div>
</body>
</html>
