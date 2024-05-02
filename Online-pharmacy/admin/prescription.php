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
<!--                <li><a href="#">Add </a></li>-->
                <li><a href="#">View </a></li>
                
            </ul>

            <ul class="nav navbar-nav navbar-right">

                <li><a href="index.php"><span class="glyphicon glyphicon-log-in"></span> Log Out</a></li>
            </ul>
        </div>

    </nav>

    <form class="form-horizontal" action="">

        <div class="form-group">
            <label class="control-label col-sm-2" for="Prescription">Prescription:</label>
            <div class="col-sm-6">
                <input type="file" class="form-control" id="prec" placeholder="" name="prec">
            </div>
        </div>

        

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-6">
                <button type="submit" class="btn btn-default">Submit</button>
            </div>
        </div>
    </form>
</div>


</body>
</html>