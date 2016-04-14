<?php
include("connection.php");
include("adminuser.php");
?>
<!DOCTYPE HTML>
<html>
    <head lang="en">
        <title>NEW USER</title>
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
                <div class="navbar-form navbar-right">
                    <div class="sign">
                        <?php echo Yuva; ?>
                        <img src="images/user.png" />
                    </div>
                </div>
            </div>
        </div>
        <div class="container contentContainer">
            <form method="post">
                <?php
                if ($Error) {
                    echo '<div class="alert alert-danger">' . addslashes($Error) . '</div>';
                }
                if ($Msg) {
                    echo '<div class="alert alert-success">' . addslashes($Msg) . '</div>';
                }
                ?>
                <div class="col-md-6 col-offset-3 marginTop">
                    <label for="FirstName"> First Name</label>
                    <input type="text" id="FirstName" name="FirstName" placeholder="Enter Firstname" class="form-control" required="required" oninvalid="InvalidFirstName(this);" oninput="InvalidFirstName(this);" /><span id="FirstNameError" class="red"> </span>
                </div>
                <div class="col-md-6 col-offset-3 marginTop">
                    <label for="LastName">Last Name</label>
                    <input type="text" id="LastName" name="LastName" placeholder="Enter LastName" class="form-control" required="required" oninvalid="InvalidLastName(this);" oninput="InvalidLastName(this);"/><span id="LastNameError" class="red"></span><br />
                </div>
                <div class="col-md-6 col-offset-3 marginTop">
                    <label for=EmailAddresss>Email Address</label>
                    <input type="email" id="EmailIAddress" name="EmailAddress" placeholder="Enter EmailAddresss" class="form-control" required="required" oninvalid="InvalidEmail(this);" oninput="InvalidEmail(this);"/>
                </div>
                <div class="col-md-6 col-offset-3 marginTop">    
                    <label for="MobileNumber">Mobile  Number</label>
                    <input type="text" id="MobileNumber" name="MobileNumber" placeholder="Enter MobileNumber" maxlength="10" class="form-control" required="required" oninvalid="InvalidMobileNumber(this);" oninput="InvalidMobileNumber(this);"/><span id="MobileNumberError" class="red"></span><br />
                </div>
                <div class="col-md-6 col-offset-3 marginTop">
                    <label for="Password">Password</label>
                    <input type="password" id="Password" name="Password" placeholder="Enter password" class="form-control" required="required" oninvalid="InvalidPassword(this);" oninput="InvalidPassword(this);"/><span id="PasswordError" class="red"></span><br />
                    <span id="Password_error"></span>
                </div>
                <div class="col-md-6 col-offset-3 marginTop">
                    <label for="ConfirmPassword">Confirm Password</label>
                    <input type="password" id="ConfirmPassword" name="ConfirmPassword" placeholder="Enter confirmPassword" class="form-control" required="required" oninvalid="InvalidConfirmPassword(this);" oninput="InvalidConfirmPassword(this);"/><span id="ConfirmPasswordError" class="red"></span><br />
                    <span id="ConfirmPassword_error"></span>
                </div>
                <div class="col-md-6 col-offset-3 marginTop">          
                    <label for="AddressOne">Address Line 1</label>
                    <textarea id="AddressOne" name="AddressOne" class="form-control" placeholder="Enter address1" required="required" oninvalid="InvalidAddress(this);" oninput="InvalidAddress(this);"></textarea>
                </div>
                <div class="col-md-6 col-offset-3 marginTop">     
                    <label for="AddressTwo">Address Line 2</label>
                    <textarea id="AddressTwo" name="AddressTwo" class="form-control" placeholder="Enter address2" required="required" oninvalid="InvalidAddress(this);" oninput="InvalidAddress(this);"></textarea>
                </div>
                <div class="col-md-6 col-offset-3 marginTop">       
                    <label for="City">City</label>
                    <input type="text" id="City" name="City" class="form-control" placeholder="Enter city" required="required" oninvalid="InvalidCity(this);" oninput="InvalidCity(this);"/><span id="CityError" class="red"></span><br />
                </div>
                <div class="col-md-6 col-offset-3 marginTop">       
                    <label for="State">State</label>
                    <input type="text" id="State" name="State" class="form-control" placeholder="Enter state" required="required" oninvalid="InvalidState(this);" oninput="InvalidState(this);"/><span id="StateError" class="red"></span><br />
                </div>
                <div class="col-md-6 col-offset-3 marginTop">             
                    <label for="Country">Country</label>
                    <input type="text" id="Country" name="Country" class="form-control" placeholder="Enter country" required="required" oninvalid="InvalidCountry(this);" oninput="InvalidCountry(this);"/><span id="CountryError" class="red"></span><br/>
                </div>
                <div class="col-md-6 col-offset-3 marginTop">

                    <label for="ZipCode">ZipCode</label>
                    <input type="text" id="ZipCode" name="ZipCode" class="form-control" maxlength="6" placeholder="Enter zipcode" required="required" oninvalid="InvalidZipCode(this);" oninput="InvaliZipCode(this);"/><span id="ZipError" class="red"></span><br/>
                </div>
                <div class="col-md-12 col-offset-3">
                    <div class="checkbox  marginTop">
                        <label><input type="checkbox"  name="tc" id="term1" value="accept"  required="">Terms And Conditions</label>
                    </div>
                    <input type="submit" class="btn btn-success btn-lg" value="AddUser" name="AddUser" id="AddUser"/>
                </div>

            </form>
        </div>
    </body>
</html>