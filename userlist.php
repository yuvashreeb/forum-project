<?php
include("connection.php");
include 'login.php';
include 'adminlogin.php';
$sql = "SELECT Id,FirstName,LastName,EmailAddress FROM RegisteredUser";
$result = mysqli_query($link, $sql);
$Row = mysqli_fetch_all($result);
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
        <link href="https://cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css" rel="stylesheet">

        <script type="text/javascript" src="js/jquery-2.2.2.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="js/validation.js"></script>
        <script>
            var Data =<?php echo json_encode($Row); ?>;
            $(document).ready(function () {
                $('#example').DataTable({
                    data: Data,
                    columns: [
                        {title: "Id"},
                        {title: "FirstName"},
                        {title: "LastName"},
                        {title: "EmailAddress"}
                    ]
                });
                var table = $('#example').DataTable();

                $('#example tbody').on('click', 'tr', function () {
                    var data = table.row(this).data();
                    window.location.href="view.php?Id="+data[0];
                });
            });

        </script>
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
            </div>
        </div>
        <div class="container UserContainer">
            <div class="container childContainer">
                <form class="form-group"  id="UserProfile" method="post" enctype="multipart/form-data" >
                    <table id="example" class="display" width="100%">
                    </table>
                </form>   
            </div>
        </div>
    </body>
</html>