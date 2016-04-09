<?php
error_reporting(0);
session_start();
include("connection.php");
if (isset($_POST['submit'])) {
    if ($_POST['submit'] == "Log In") {
        $error = " ";
        $x = mysqli_real_escape_string($link, $_POST['adminemail']);
        $y = ($_POST['adminpassword']);
        $login_que = "SELECT * FROM Admin WHERE Email='$x' AND Password='$y'";
        //$query="SELECT * FROM users WHERE email='".mysqli_real_escape_string($link,$_POST['loginemail'])."' AND password='".md5(md5($_POST['loginemail'].$_POST['loginpassword']))."'"; 
        $result1 = mysqli_query($link, $login_que);
        $row = mysqli_fetch_array($result1);
        //print_r($row);
        if ($row) {
            $_SESSION['id'] = $row['id'];
            //print_r($_SESSION);
            header("Location:adminsuccess.php");
        } else {
            $error = 'You didnot enter proper details';
        }
    }
}
?>