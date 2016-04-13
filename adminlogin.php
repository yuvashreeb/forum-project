<?php
error_reporting(0);
session_start();
include("connection.php");
if (isset($_POST['submit'])) {
    if ($_POST['submit'] == "Log In") {
        $Error = " ";
        $EmailId = mysqli_real_escape_string($Link, $_POST['adminemail']);
        $Password = ($_POST['adminpassword']);
        $LoginQuery = "SELECT * FROM Admin WHERE Email='$EmailId' AND Password='$Password'";
        $Result = mysqli_query($Link, $LoginQuery);
        $Row = mysqli_fetch_array($Result);
        if ($Row) {
            $_SESSION['id'] = $Row['Id'];

            header("Location:adminsuccess.php");
        } else {
            $Error = 'You didnot enter proper details';
        }
    }
}
?>