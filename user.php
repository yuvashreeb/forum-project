<?php
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
    <body data-target=".navbar-collapse">
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
                <div class="collapse navbar-collapse">
                    <form class="navbar-form navbar-right" method="post">
                        <div class="form-group">
                            <input type="email" name="loginemail" class="form-control" placeholder="Email Id" value="<?php if (isset($_POST['loginemail'])) echo addslashes($_POST['loginemail']); ?>" required="required" oninvalid="InvalidEmail(this);" oninput="InvalidEmail(this);"/>
                            <input type="password" name="loginpassword" class="form-control" placeholder="Password" value="<?php if (isset($_POST['loginpassword'])) echo addslashes($_POST['loginpassword']); ?>" required="required" oninvalid="InvalidPassword(this);" oninput="InvalidPassword(this);"/>
                            <input type="submit" class="btn btn-success" name="submit" value="login">
                            <br><a href="forgotpassword.php">Forgot Password?</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="container">
            <?php
            if ($error) {
                echo '<div class="alert alert-danger">' . addslashes($error) . '</div>';
            }
            if ($msg) {
                echo '<div class="alert alert-success">' . addslashes($msg) . '</div>';
            }
            ?>
            <div class="col-md-10 col-md-offset-2 center">
                <div class="col-md-8 col-md-offset-2"><h2><i><u>REGISTER HERE!</u></i></h2></div>
                <form class="form-group"  id="registration" method="post">

                    <div class="row">
                        <div class="col-md-6 col-md-offset-2 marginTop">
                            First Name
                            <input type="text" id="FirstName" name="FirstName" placeholder="Enter FirstName" class="form-control " value="<?php if (isset($_POST['FirstName'])) echo addslashes($_POST['FirstName']); ?>" required="required" oninvalid="InvalidFirstName(this);" oninput="InvalidFirstName(this);" /><span id="firstnameerror" class="red"> </span><br />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-md-offset-2">
                            Last Name
                            <input type="text" id="LastName" name="LastName" placeholder="Enter LastName" class="form-control" value="<?php if (isset($_POST['LastName'])) echo addslashes($_POST['LastName']); ?>" required="required" oninvalid="InvalidLastName(this);" oninput="InvalidLastName(this);"/><span id="lastnameerror" class="red"></span><br />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-md-offset-2">
                            Email Id
                            <input type="Email" id="EmailAddress" name="EmailAddress" placeholder="Enter EmailId" class="form-control" value="<?php if (isset($_POST['EmailAddress'])) echo addslashes($_POST['EmailAddress']); ?>" required="required" oninvalid="InvalidEmail(this);" oninput="InvalidEmail(this);"/><br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-md-offset-2">
                            Password
                            <input type="Password" id="Password" name="Password" placeholder="Enter Password" class="form-control" value="<?php if (isset($_POST['Password'])) echo addslashes($_POST['Password']); ?>" required="required" oninvalid="InvalidPassword(this);" oninput="InvalidPassword(this);"/><span id="passworderror" class="red"></span><br />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-md-offset-2">
                            Confirm Password
                            <input type="password" id="ConfirmPassword" name="ConfirmPassword" placeholder="ConfirmPassword" class="form-control" value="<?php if (isset($_POST['ConfirmPassword'])) echo addslashes($_POST['ConfirmPassword']); ?>" required="required" oninvalid="InvalidConfirmPassword(this);" oninput="InvalidConfirmPassword(this);"/><span id="ConfirmPassworderror" class="red"></span><br />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-md-offset-2">
                            Mobile Number
                            <input type="text" id="MobileNumber" name="MobileNumber" placeholder="Enter Mobile Number" maxlength="10" class="form-control" value="<?php if (isset($_POST['MobileNumber'])) echo addslashes($_POST['MobileNumber']); ?>" required="required" oninvalid="InvalidMobileNumber(this);" oninput="InvalidMobileNumber(this);"/><span id="MobileNumbererror" class="red"></span><br />
                            <span id="mobile_error" > </span><br />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-md-offset-2">
                            <label for="Terms"><input type="checkbox" name="Terms" value="Terms" id="Terms">Terms And Conditions</label>
                        </div>
                    </div>
                    <div class="col-md-6 col-md-offset-2">
                        <input type="submit" value="Sign Up" class="btn btn-success marginTop" name="submit">
                    </div>

                </form>
            </div>
        </div>
</html>