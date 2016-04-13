<?php
include 'login.php';
include 'adminlogin.php';
include 'adminuser.php';
$UserQuery = "SELECT * FROM RegisteredUser WHERE Id='" . $_GET['Id'] . "' LIMIT 1";
$UserResult = mysqli_query($Link, $UserQuery);
$Row = mysqli_fetch_array($UserResult);
$UserEmail = $Row['EmailAddress'];
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/styles.css" rel="stylesheet">
        <script src="js/jquery-2.2.2.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/validation.js"></script>
    </head>
    <body>
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
        <body data-type="scroll"> 
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
                            <ul class="nav navbar-nav">
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
            <div class="container UserContainer">
                <?php
                if ($Error) {
                    echo '<div class="alert alert-danger">' . addslashes($Error) . '</div>';
                }
                if ($Msg) {
                    echo '<div class="alert alert-success">' . addslashes($Msg) . '</div>';
                }
                ?>
                <h2><center>Delete Profile</center></h2>
                <div class="container col-md-6 col-offset-3"> 
                    <form class="form-group"  id="DeleteProfile" method="post" enctype="multipart/form-data" > 
                        <div class="col-md-12 col-offset-3">
                            
                            <label for=EmailAddress>Email Address</label>
                            <input type="email" id="EmailAddress" name="EmailAddress" placeholder="EmailAddress" class="form-control " readonly value="<?php echo $UserEmail; ?>" />
                        </div>

                        <div class="col-md-6 col-offset-3 marginTop">
                            <input type="submit" class="btn btn-success btn-lg" value="DeleteProfile" name="DeleteProfile" id="DeleteProfile"/></div>

                    </form>
                </div>
            </div>
        </body>
    </html>
