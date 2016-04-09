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
            </div>
        </div>
        <form method="post" action="index.php">
            <div class="col-md-10 col-md-offset-2 center">
                <div class="row">
                    <div class="col-md-6 col-md-offset-2">
                        Email Address
                        <input type="email" id="Email" name="Email" id="Email" class="form-control" required=""/>
                    </div>
                    <div class="col-md-6 col-md-offset-2">
                        <input type="submit" value="submit" class="btn btn-success marginTop" name="ForgotPassword">
                    </div>

                </div>
            </div>
        </form>
    </body>
</html>