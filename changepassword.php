<?php
include("connection.php");
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
                                <a class="dropdown-toggle" data-toggle="dropdown" href="">My Profile
                                    <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="">Edit Profile</a></li>
                                    <li><a href="">View Profile</a></li>
                                </ul>
                            </li>
                            <li><a href="">Change Password</a></li>
                            <li><a href="index.php?logout=1">Log Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <form method="post">
            <div class="col-md-10 col-md-offset-2 center">
                <div class="row">
                    <div class="col-md-6 col-md-offset-2">
                        Current Password
                        <input type="password" id="CurrentPassword" name="CurrentPassword" id="CurrentPassword" class="form-control"/>
                    </div>
                    <div class="col-md-6 col-md-offset-2">
                        New Password
                        <input type="password" id="NewPassword" name="NewPassword" id="NewPassword" class="form-control"/>
                    </div>
                    <div class="col-md-6 col-md-offset-2">
                        Confirm Password
                        <input type="password" id="Confirmassword" name="ConfirmPassword" id="ConfirmPassword" class="form-control"/>
                    </div>
                    <div class="col-md-6 col-md-offset-2">
                        <input type="submit" value="submit" class="btn btn-success marginTop" name="ChangePassword">
                    </div>

                </div>
            </div>
        </form>
        </div>
    </body>
</html>