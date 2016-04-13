<?php
error_reporting(0);
include('login.php');
include("passwordchange.php");
session_start();
$id=$_SESSION['id'];
if(!$id){
    header("location:user.php");
}
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
    <body onbeforeunload="return myFunction()">
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
                <div class="pull-left">
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav">>
                            <li class="dropdown">
                                <a data-toggle="dropdown" class="dropdown-toggle" href="#"><span class="glyphicon glyphicon-user"></span>My Profile
                                    <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="editprofile.php"><span class="glyphicon glyphicon-edit"></span>Edit Profile</a></li>

                                </ul>
                            </li>
                            <li><a href="userview.php"><span class="glyphicon glyphicon-eye-open"></span>View Profile</a></li>
                            <li><a href="changepassword.php"><span class="glyphicon glyphicon-pencil"></span>Change Password</a></li>
                            <li><a href="user.php?logout=1"><span class="glyphicon glyphicon-log-out"></span>Log Out</a></li>
                        </ul>
                    </div>
                </div>
                <div class="navbar-form navbar-right">
                    <div class="sign">
                        <?php echo $Name; ?>
                        <img src="images/user.png" />
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
                            <input type="password" id="CurrentPassword" name="CurrentPassword" class="form-control" required title="please enter current password"/>
                            <span class="red"><?php
                                if (isset($error)) {
                                    echo "<div class='alert alert-danger'>" . $error . "</div>";
                                }
                                ?></span>
                        </div>
                        <div class="col-md-6 col-md-offset-2">
                            New Password
                            <input type="password" id="NewPassword" name="NewPassword" class="form-control" required="required" oninvalid="InvalidNewPassword(this);" oninput="InvalidNewPassword(this);"/><span id="Newpassworderror" class="red"></span>
                        </div>
                        <div class="col-md-6 col-md-offset-2">
                            Confirm Password
                            <input type="password" id="NewConfirmPassword" name="NewConfirmPassword" class="form-control" required="required" oninvalid="InvalidNewConfirmPassword(this);" oninput="InvalidNewConfirmPassword(this);"/><span id="NewConfirmPassworderror" class="red"></span><br />
                        </div>
                        <div class="col-md-6 col-md-offset-2">
                            <input type="submit" value="ChangePassword" class="btn btn-success marginTop" name="ChangePassword">
                            <span class="green"><?php
                            if (isset($msg)) {
                                echo "<div class='alert alert-success'>" . $msg . "</div>";
                            }
                            ?> </span>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <script>
            function myFunction() {
                return "Do you Want to make any chnages";
            }
        </script>
    </body>
</html>