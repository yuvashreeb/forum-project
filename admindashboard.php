<!DOCTYPE HTML>
<html>
    <head lang="en">
        <title>ADMIN DASHBOARD</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link type="text/css" href="css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="css/style.css">
        <script type="text/javascript" src="js/jquery-2.2.2.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/validation.js"></script>
    </head>
    <body> 
        <div class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span> 
                    </button>
                    <a href="" class="navbar-brand">FORUM MANAGEMENT</a>
                </div>
                <div class="pull-right">
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav">>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href=""><span class="glyphicon glyphicon-user"></span>Users
                                    <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="userlist.php"><span class="glyphicon glyphicon-list"></span>Users List</a></li>
                                    <li><a href="createuser.php"><span class="glyphicon glyphicon-plus"></span>New User</a></li>
                                </ul>
                            </li>
                            <li><a href="admin.php?logout=1"><span class="glyphicon glyphicon-log-out"></span>Log Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container contentContainer">
            <div class="row center marginTop">
                <div class="col-md-6 col-md-offset-3 center color ">
                    <?php echo '<h2>Welcome to your Dashboard!</h2>'; ?>
                </div>
            </div>
        </div>
    </body>
</html>