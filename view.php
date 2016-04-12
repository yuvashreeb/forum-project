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
        <?php
        include 'login.php';
        include 'adminlogin.php';
        ?>
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
        <div class="container">
            <div class="container">
                <form class="form-group" method="post" enctype="multipart/form-data" >

                    <?php
                    $UserQuery = "SELECT * FROM RegisteredUser WHERE Id='" . $_GET['Id'] . "' LIMIT 1";
                    $UserResult = mysqli_query($link, $UserQuery);
                    $id = $_GET['Id'];
                    ?>

                    <div class="table-responsive">          
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>FirstName</th>
                                    <th>LastName</th>
                                    <th>EmailId</th>
                                    <th>Mobile-Number</th>
                                    <th>Password</th>
                                    <th>AddressOne</th>
                                    <th>AddressTwo</th>
                                    <th>City</th>
                                    <th>State</th>
                                    <th>Country</th>
                                    <th>Zip-Code</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($row = mysqli_fetch_row($UserResult)) {
                                    ?>
                                    <tr>
                                        <td><?php echo $row[0] ?></td>
                                        <td><?php echo $row[1] ?></td>
                                        <td><?php echo $row[2] ?></td>
                                        <td><?php echo $row[3] ?></td>
                                        <td><?php echo $row[5] ?></td>
                                        <td><?php echo $row[4] ?></td>
                                        <td><?php echo $row[6] ?></td>
                                        <td><?php echo $row[7] ?></td>
                                        <td><?php echo $row[8] ?></td>
                                        <td><?php echo $row[9] ?></td>
                                        <td><?php echo $row[10] ?></td>
                                        <td><?php echo $row[11] ?></td>
                                    </tr>
                                    <?php
                                }
                                ?>

                            </tbody>
                        </table>
                    </div>
                    <br/> 

                    <input type="button" class="btn btn-success" id="Edit" value="Edit"/>
                    <input type="button" class="btn btn-success" id="Delete" value="Delete"/>
                    <!--<a href="map.php?Id=<?php echo $id; ?>">Click Here To View Location</a>-->
                    <a href="#" class="read" data-toggle="modal" data-target="#myModal" data-backdrop="static">Click Here to view location</a>

                </form> 
            </div>
        </div>
        <script>
            $(document).ready(function () {
                $("#Edit").click(function () {

                    window.location.href = "edit.php?Id=<?php echo $id; ?>";
                });

            });
            $(document).ready(function () {
                $("#Delete").click(function () {

                    window.location.href = "Delete.php?Id=<?php echo $id; ?>";
                });

            });
        </script>

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
                        include 'map.php';
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
