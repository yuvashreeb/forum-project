<?php
include('connection.php');
include('login.php');
session_start();
if ($Id = $_SESSION["Id"]) {
    $Query = "select * from RegisteredUser where Id='$Id'";
    $Result = mysqli_query($Link, $Query);
    $Row = mysqli_fetch_row($Result);
    $FirstName = $Row[1];
    $LastName = $Row[2];
    $EmailAddress = $Row[3];
    $MobileNumber = $Row[5];
    $AddressLineOne = $Row[6];
    $AddressLineTwo = $Row[7];
    $City = $Row[8];
    $State = $Row[9];
    $Country = $Row[11];
    $ZipCode = $Row[10];
} else {
    header("location:user.php");
}
?>
<html>
    <head lang="en">
        <title>VIEW PROFILE</title>
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
                            <li><a href=""><span class="glyphicon glyphicon-eye-open"></span>View Profile</a></li>
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
            <form class="form-horizontal" method="post">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <label>First Name:</label>
                        <input type="text" class="form-control" value="<?php echo $FirstName; ?>" disabled>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <label>Last Name:</label>
                        <input type="text" class="form-control" value='<?php echo $LastName; ?>' disabled>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <label>Email Address:</label>
                        <input type="text" class="form-control" value='<?php echo $EmailAddress; ?>' disabled>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <label>Mobile Number:</label>
                        <input type="text" class="form-control" value='<?php echo $MobileNumber; ?>' disabled>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <label>Address Line 1:</label>
                        <textarea class="form-control" name="addressLineOne" disabled><?php echo $AddressLineOne; ?></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <label>Address Line 2:</label>
                        <textarea class="form-control" name="addressLineTwo" disabled><?php echo $AddressLineTwo; ?></textarea>
                    </div>
                    <a href="#" class="read" data-toggle="modal" data-target="#Map" data-backdrop="static">Click Here to view location<span class="glyphicon glyphicon-map-marker"></span></a>
                </div>
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <label>City:</label>
                        <input type="text" class="form-control" value='<?php echo $City; ?>' disabled>

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <label>State:</label>
                        <input type="text" class="form-control" value='<?php echo $State; ?>' disabled>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                         <label>Country:</label>
                         <input type="text" class="form-control" value='<?php echo $Country; ?>' disabled>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <label>ZipCode:</label>
                    <input type="tel" class="form-control" value='<?php echo $ZipCode; ?>' disabled>
                </div>
            </div>
        </form>
    </div>
    <div class="modal fade" id="Map" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">X</button>
                    <h4 class="modal-title">Location</h4>
                </div>
                <div class="modal-body">
                    <?php
                    include 'Map.php';
                    ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>
</body>
</html>