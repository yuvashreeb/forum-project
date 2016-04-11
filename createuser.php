<?php
include("connection.php");
include("adminuser.php");
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
            <form method="post">
                 <?php
                    if($error)
                    {
                        echo '<div class="alert alert-danger">'.addslashes($error).'</div>';
                    }
                    if($msg)
                    {
                        echo '<div class="alert alert-success">'.addslashes($msg).'</div>';
                    }
                    ?>
            <div class="col-md-6 col-offset-3 marginTop">
                <label for="FirstName"> First Name</label>
                <input type="text" id="FirstName" name="FirstName" placeholder="Enter Firstname" class="form-control" required="required" oninvalid="InvalidFirstName(this);" oninput="InvalidFirstName(this);" /><span id="firstnameerror" class="red"> </span>
            </div>
            <div class="col-md-6 col-offset-3 marginTop">
                <label for="LastName">Last Name</label>
                <input type="text" id="LastName" name="LastName" placeholder="Enter LastName" class="form-control" required=""/>

            </div>
            <div class="col-md-6 col-offset-3 marginTop">
                
                <label for=EmailAddresss>Email Address</label>
                <input type="email" id="EmailIAddress" name="EmailAddress" placeholder="Enter EmailAddresss" class="form-control"/>
            </div>
            <div class="col-md-6 col-offset-3 marginTop">
                
                <label for="MobileNumber">Mobile  Number</label>
                <input type="text" id="MobileNumber" name="MobileNumber" placeholder="Enter MobileNumber" maxlength="10" class="form-control" />
            </div>
            <div class="col-md-6 col-offset-3 marginTop">

                <label for="Password">Password</label>
                <input type="password" id="Password" name="Password" placeholder="Enter password" class="form-control"/>

                <span id="Password_error"></span>


            </div>
            <div class="col-md-6 col-offset-3 marginTop">

                <label for="ConfirmPassword">Confirm Password</label>
                <input type="password" id="ConfirmPassword" name="ConfirmPassword" placeholder="Enter confirmPassword" class="form-control"/>
                <span id="ConfirmPassword_error"></span>


            </div>
            <div class="col-md-6 col-offset-3 marginTop">
                
                <label for="AddressOne">Address Line 1</label>
                <textarea id="AddressOne" name="AddressOne" class="form-control" placeholder="Enter address1"></textarea>
            </div>

            <div class="col-md-6 col-offset-3 marginTop">
                
                <label for="AddressTwo">Address Line 2</label>
                <textarea id="AddressTwo" name="AddressTwo" class="form-control" placeholder="Enter address2"></textarea>
            </div>
            <div class="col-md-6 col-offset-3 marginTop">
               
                <label for="City">City</label>
                <input type="text" id="City" name="City" class="form-control" placeholder="Enter city"/>

            </div>
            <div class="col-md-6 col-offset-3 marginTop">
                
                <label for="State">State</label>
                <input type="text" id="State" name="State" class="form-control" placeholder="Enter state">

            </div>
            <div class="col-md-6 col-offset-3 marginTop">
                
                <label for="Country">Country</label>
                <input type="text" id="Country" name="Country" class="form-control" placeholder="Enter country"/>

            </div>
            <div class="col-md-6 col-offset-3 marginTop">
                
                <label for="ZipCode">ZipCode</label>
                <input type="text" id="ZipCode" name="ZipCode" class="form-control" maxlength="6" placeholder="Enter zipcode"/>

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