<?php
include('connection.php');
include('login.php');
session_start();
$id = $_SESSION["id"];
$query = "select * from RegisteredUser where Id='$id'";
$result = mysqli_query($link, $query);
$row = mysqli_fetch_row($result);
$firstName = $row[1];
$lastName = $row[2];
$emailAddress = $row[3];
$mobileNumber = $row[5];
$addressLineOne = $row[6];
$addressLineTwo = $row[7];
$city = $row[8];
$state = $row[9];
$country = $row[11];
$zipcode = $row[10];
?>
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
                            <li><a href="">View Profile</a></li>
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
        <div class="container">
            <div class="row">
                <form class="form-horizontal" method="post">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <label>First Name:</label>
                            <input type="text" class="form-control" value="<?php echo $firstName; ?>" disabled>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <label>Last Name:</label>
                            <input type="text" class="form-control" value='<?php echo $lastName; ?>' disabled>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <label>Email Address:</label>
                            <input type="text" class="form-control" value='<?php echo $emailAddress; ?>' disabled>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <label>Mobile Number:</label>
                            <input type="text" class="form-control" value='<?php echo $mobileNumber; ?>' disabled>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <label>Address Line 1:</label>
                            <textarea class="form-control" name="addressLineOne" disabled><?php echo $addressLineOne; ?></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <label>Address Line 2:</label>
                            <textarea class="form-control" name="addressLineTwo" disabled><?php echo $addressLineTwo; ?></textarea>
                        </div>
                        <!--<a href="Map.php">Click Here To View Location</a><br>-->
                        <a href="#" class="read" data-toggle="modal" data-target="#myModal" data-backdrop="static">Click Here to view location</a>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <label>City:</label>
                            <input type="text" class="form-control" value='<?php echo $city; ?>' disabled>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <label>State:</label>
                            <input type="text" class="form-control" value='<?php echo $state; ?>' disabled>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3>
                             <label>Country:</label>
                             <input type="text" class="form-control" value='<?php echo $country; ?>' disabled>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <label>ZipCode:</label>
                        <input type="tel" class="form-control" value='<?php echo $zipcode; ?>' disabled>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
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