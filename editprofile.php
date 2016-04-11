<?php
include("connection.php");
include ("login.php");
include("update.php");
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
                <div class="pull-left">
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav">>
                            <li class="dropdown">
                                <a data-toggle="dropdown" class="dropdown-toggle" href="#">My Profile
                                    <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="editprofile.php">Edit Profile</a></li>
                                </ul>
                            </li>
                            <li><a href="userview.php">View Profile</a></li>
                            <li><a href="changepassword.php">Change Password</a></li>
                            <li><a href="user.php?logout=1">Log Out</a></li>
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
        <div class="container contentContainer">
            <form class="form-group"  id="registration" method="post">
                <div class="row">
                    <div class="col-md-6 col-md-offset-2 marginTop">
                        First Name
                        <input type="text" id="FirstName" name="FirstName" class="form-control" value="<?php echo $Name; ?>" readonly/><br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-md-offset-2">
                        Last Name
                        <input type="text" id="LastName" name="LastName" class="form-control" readonly value="<?php echo $LastName; ?>"/><br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-md-offset-2">
                        Email Id
                        <input type="Email" id="EmailAddress" name="EmailAddress" class="form-control" readonly value="<?php echo $EmailAddress; ?>"/><br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-md-offset-2">
                        Mobile Number
                        <input type="text" id="MobileNumber" name="MobileNumber" maxlength="10" class="form-control" readonly value="<?php echo $MobileNumber; ?>"/><br>
                        <span id="mobile_error" > </span><br />
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-md-offset-2">
                        Address Line1
                        <textarea class="form-control" name="AddressOne" id="AddressOne"></textarea><br/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-md-offset-2">
                        Address Line2
                        <textarea class="form-control" name="AddressTwo" id="AddressTwo"></textarea><br/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-md-offset-2">
                        City:
                        <input type="text" id="City" name="City" class="form-control"/><span id="cityerror" class="red"></span><br />
                    </div>
                    <div class="col-md-6 col-md-offset-2">
                        State:
                        <input type="text" id="State" name="State" class="form-control"/><span id="stateerror" class="red"></span><br />

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-md-offset-2">
                        Country:
                        <input type="text" name="Country" id="Country" class="form-control"/><span id="countryerror" class="red"></span><br/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-md-offset-2">
                        Zip Code:
                        <input type="text" id="ZipCode" name="ZipCode" class="form-control" maxlength="6"/><span id="ziperror" class="red"></span><br/>
                    </div>
                </div>
                <div class="col-md-6 col-md-offset-2">
                    <input type="submit" value="Update" class="btn btn-success marginTop" name="Update">
                </div>
            </form>
            <?php
            if ($msg) {
                echo '<div class="alert alert-success">' . addslashes($msg) . '</div>';
            }
            ?>
        </div>
    </body>
</html>