<?php
include ("adminlogin.php");
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
                            <input type="email" name="adminemail" class="form-control" placeholder="Email Id" value="<?php if (isset($_POST['adminemail'])) echo addslashes($_POST['adminemail']); ?>" required="required" oninvalid="InvalidEmail(this);" oninput="InvalidEmail(this);"/>
                            <input type="password" name="adminpassword" class="form-control" placeholder="Password" value="<?php if (isset($_POST['adminpassword'])) echo addslashes($_POST['adminpassword']); ?>" required="required" oninvalid="InvalidPassword(this);" oninput="InvalidPassword(this);"/>
                            <input type="submit" class="btn btn-success" name="submit" value="Log In">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <?php
            if ($Error) {
                echo '<div class="alert alert-danger">' . addslashes($Error) . '</div>';
            }
            ?>
            <img src="images/admin.jpg" alt="yuva" height="570px" width="100%">
        </div>
    </body>
</html>