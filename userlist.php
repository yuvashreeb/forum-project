<?php
include ('connection.php');
include ('login.php');
$query = "select FirstName, LastName, EmailAddress from RegisteredUser where id='" . $_SESSION['id'] . "' LIMIT 1";
$result = mysqli_query($link, $query);
?>
<!DOCTYPE HTML>
<html>
    <head lang="en">
        <title>FORUM MANAGEMENT</title>
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
                                <a class="dropdown-toggle" data-toggle="dropdown" href="">Users
                                    <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="userlist.php">Users List</a></li>
                                    <li><a href="createuser.php">New User</a></li>
                                </ul>
                            </li>
                            <li><a href="admin.php?logout=1">Log Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container contentContainer">
            
        </div>
    </body>
</html>