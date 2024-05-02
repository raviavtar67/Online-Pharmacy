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

    <h2>Welcome Admin !
    </h2>
    <nav class="navbar navbar-inverse">

        <div class="navbar-header">
            <a class="navbar-brand" style="padding-top: 22px; font-size: large;" href="dashboard.php">Dashbord</a>
        </div>

        <ul class="nav navbar-nav">
            <li><div class="dropdown " ><button class=" dropdown-toggle navbar navbar-inverse" data-toggle="dropdown" style="border: 0px; padding-top: 15px;color: white; font-size: large;">Medicines<span class="caret"> </span></button>
                    <ul class="dropdown-menu">
                        <li><a href="stockmanagement.php">Add</a></li>
                        <li><a href="viewStock.php">View</a></li>

                    </ul>
                </div>
            </li>

            <li><div class="dropdown " ><button class=" dropdown-toggle navbar navbar-inverse" data-toggle="dropdown" style="border: 0px; padding-top: 15px;color: white; font-size: large;">Pharmacist<span class="caret"></span></button>
                    <ul class="dropdown-menu">
                        <li class=" "><a href="phramacist.php">Add</a></li>
                        <li><a href="viewPharmacist.php">View</a></li>

                    </ul>
                </div>
            </li>

            <li><div class="dropdown " ><button class=" dropdown-toggle navbar navbar-inverse" data-toggle="dropdown" style="border: 0px;padding-top: 15px; color: white; font-size: large;">Prescription<span class="caret"></span></button>
                    <ul class="dropdown-menu">
                        <li class=" "><a href="prescription.php">Add</a></li>
                        <li><a href="#">View</a></li>

                    </ul>
                </div>
            </li>

            <li><div class="dropdown " ><button class=" dropdown-toggle navbar navbar-inverse" data-toggle="dropdown" style="border: 0px;padding-top: 15px; color: white; font-size: large;">Cashier<span class="caret"></span></button>
                    <ul class="dropdown-menu">
                        <li class=" "><a href="cashier.php">Add</a></li>
                        <li><a href="viewCashier.php">View</a></li>

                    </ul>
                </div>
            </li>

        </ul>
        <ul class="nav navbar-nav navbar-right">

            <li style="font-size: large;margin-right: 10px;padding-top: 5px;" ><a href="form.php"><span class="glyphicon glyphicon-log-in"></span> Log Out</a></li>
        </ul>

    </nav>

    <div class="row">
        <div class="col-sm-2">
            <ul class="list-group" style="font-size: large">
                <a class="list-group-item" href="stockmanagement.php">Medicines</a>
                <a class="list-group-item " href="phramacist.php">Pharmacist</a>
                <a class="list-group-item" href="prescription.php">Prescription</a>
                <a class="list-group-item" href="cashier.php">Cashier</a>
            </ul>
        </div>
    </div>
</div>

</body>
</html>