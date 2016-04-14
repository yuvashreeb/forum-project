<?php
include("connection.php");
include ("login.php");
include("update.php");
session_start();
$Id=$_SESSION['Id'];
if(!$Id){
    header("location:user.php");
}
?>
<!DOCTYPE HTML>
<html>
    <head lang="en">
        <title>EDIT PROFILE</title>
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
        <div class="container contentContainer">
            <?php
            if ($Msg) {
                echo '<div class="alert alert-success">' . addslashes($Msg) . '</div>';
            }
            ?>
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
                        <textarea class="form-control" name="AddressOne" id="AddressOne" required="required" oninvalid="InvalidAddress(this);" oninput="InvalidAddress(this);"></textarea><br/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-md-offset-2">
                        Address Line2
                        <textarea class="form-control" name="AddressTwo" id="AddressTwo" required="required" oninvalid="InvalidAddress(this);" oninput="InvalidAddress(this);"></textarea><br/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-md-offset-2">
                        City:
                        <input type="text" id="City" name="City" class="form-control" required="required" oninvalid="InvalidCity(this);" oninput="InvalidCity(this);"/><span id="CityError" class="red"></span><br />
                    </div>
                    <div class="col-md-6 col-md-offset-2">
                        State:
                        <input type="text" id="State" name="State" class="form-control" required="required" oninvalid="InvalidState(this);" oninput="InvalidState(this);"/><span id="StateError" class="red"></span><br />

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-md-offset-2">
                        Country:
                        <input type="text" name="Country" id="Country" class="form-control" required="required" oninvalid="InvalidCountry(this);" oninput="InvalidCountry(this);"/><span id="CountryError" class="red"></span><br/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-md-offset-2">
                        Zip Code:
                        <input type="text" id="ZipCode" name="ZipCode" class="form-control" maxlength="6" required="required" oninvalid="InvalidZipCode(this);" oninput="InvaliZipCode(this);"/><span id="ZipError" class="red"></span><br/>
                    </div>
                </div>
                <div class="row">
                <div class="col-md-6 col-md-offset-2">
                    <input type="submit" value="Update" class="btn btn-success marginTop" name="Update">
                </div>
                </div>
            </form>
        </div>
    </body>
</html>