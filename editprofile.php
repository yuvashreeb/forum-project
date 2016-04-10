<?php
include("connection.php");
include ("login.php");
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
        <?php
        if (isset($_POST['submit']) == 'Sign Up') {
            $FirstName = $_POST['FirstName'];
        }
        ?>
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
                            <li><a href="changepassword.php">Change Password</a></li>
                            <li><a href="index.php?logout=1">Log Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container contentContainer">
            <form class="form-group"  id="registration" method="post">
                <div class="row">
                    <div class="col-md-6 col-md-offset-2 marginTop">
                        First Name
                        <input type="text" id="FirstName" name="FirstName" class="form-control" value="<?php echo $_POST['FirstName']; ?>" readonly=""/><br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-md-offset-2">
                        Last Name
                        <input type="text" id="LastName" name="LastName" class="form-control" readonly=""/><br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-md-offset-2">
                        Email Id
                        <input type="Email" id="EmailAddress" name="EmailAddress" class="form-control" readonly=""/><br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-md-offset-2">
                        Mobile Number
                        <input type="text" id="MobileNumber" name="MobileNumber" maxlength="10" class="form-control" readonly=""/><br>
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
                        <input type="text" id="City" name="City" class="form-control" value="<?php if (isset($_POST['City'])) echo addslashes($_POST['City']); ?>"/><span id="cityerror" class="red"></span><br />
                    </div>
                    <div class="col-md-6 col-md-offset-2">
                        State:
                        <input type="text" id="State" name="State" class="form-control" value="<?php if (isset($_POST['State'])) echo addslashes($_POST['State']); ?>"/><span id="stateerror" class="red"></span><br />

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-md-offset-2">
                        Country:
                        <input type="text" name="Country" id="Country" class="form-control" value="<?php if (isset($_POST['Country'])) echo addslashes($_POST['Country']); ?>"/><span id="countryerror" class="red"></span><br/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-md-offset-2">
                        Zip Code:
                        <input type="text" id="ZipCode" name="ZipCode" class="form-control " value="<?php if (isset($_POST['ZipCode'])) echo addslashes($_POST['ZipCode']); ?>"/><span id="ziperror" class="red"></span><br/>
                    </div>
                </div>
                <div class="col-md-6 col-md-offset-2">
                    <input type="submit" value="Sign In" class="btn btn-success marginTop" name="submit">
                </div>
                <?php
                if ($msg) {
                    echo '<div class="alert alert-success">' . addslashes($msg) . '</div>';
                }
                ?>
            </form>
        </div>
        <?php
        if (isset($_POST['submit']) == 'Sign In') {
            session_start();
            $query = "INSERT INTO RegisteredUser (AddressOne,AddressTwo,City,State,Country,ZipCode) VALUES('" . ($_POST['AddressOne']) . "', '" . ($_POST['AddressTwo']) . "', '" . ($_POST['City']) . "', '" . ($_POST['State']) . "', '" . ($_POST['Country']) . "', '" . ($_POST['ZipCode']) . "')";
            mysqli_query($link, $query);
            $msg.="<center>Updated your profile!</center>";
            $id = $_SESSION['id'];
        }
        ?>
    </body>
</html>