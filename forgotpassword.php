<?php
include ('forgot.php');
?>
<!DOCTYPE HTML>
<html>
    <head lang="en">
        <title>FORGOT PASSWORD</title>
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
                            <li><a href="user.php">Home</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
        <form method="post">
            <div class="col-md-10 col-md-offset-2 center">
                <div class="row">
                    <div class="col-md-6 col-md-offset-2">
                        Email Address
                        <input type="email" id="EmailForgot" name="EmailForgot" class="form-control" required value="<?php if (isset($Email)) echo $Email; ?>"/>
                    </div>
                    <div class="col-md-6 col-md-offset-2">
                        <input type="submit" value="submit" class="btn btn-success marginTop" name="submit">
                    </div>
                </div>
            </div>
        </form>
        </div>
        <?php
        if (isset($Error)) {
            echo '<div class="alert alert-danger">' . $Error . '</div>';
        }
        if (isset($Message)) {
            echo '<div class="alert alert-success">' . $Message . '</div>';
        }
        ?>
    </body>
</html>