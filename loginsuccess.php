<!DOCTYPE HTML>
<html>
    <head lang="en">
        <title>LOGIN SUCCESS</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link type="text/css" href="css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="css/style.css">
        <script type="text/javascript" src="js/jquery-2.2.2.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/validation.js"></script>
        <?php
        include("login.php");
        if($id=$_SESSION['Id']){
        $UserQuery = "SELECT FirstName FROM RegisteredUser WHERE Id='" . $_SESSION['Id'] . "' LIMIT 1";
        $UserResult = mysqli_query($Link, $UserQuery);
        $Row = mysqli_fetch_array($UserResult);
        $Name = $Row['FirstName'];}
        else{
            header("location:user.php");
        }
        ?>
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
            </div>
        </div>
        <div class="container contentContainer">
            <div class="row center marginTop">
                <div class="col-md-6 col-md-offset-3 center color ">
                    <?php echo "Welcome ".$Name."<br>";echo ' You Loged In Successfully!<br>Please click the following link to continue further'; ?>
                    <a href="userdashboard.php">Click Here!</a>
                </div>
            </div>
        </div>
    </body>
</html>