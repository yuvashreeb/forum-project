<?php
error_reporting(0);
session_start();
$UserQuery = "SELECT * FROM RegisteredUser WHERE Id='" . $_SESSION['Id'] . "' LIMIT 1";
$UserResult = mysqli_query($Link, $UserQuery);
$Row = mysqli_fetch_array($UserResult);
$Name = $Row['FirstName'];
$LastName = $Row['LastName'];
$EmailAddress = $Row['EmailAddress'];
$MobileNumber = $Row['MobileNumber'];

if ($_GET['logout'] == 1 AND $_SESSION['id']) {
    session_destroy();
    $Msg = "you have been successfully logged out!";
}
include("connection.php");
if (isset($_POST['submit']) == "Sign Up") {
    $Error = "";

    if (!$_POST['EmailAddress'])
        $Error.="please enter the email id <br/>";
    else if (!(filter_var($_POST['EmailAddress'], FILTER_VALIDATE_EMAIL)))
        $Error.="please enter valid email id <br/>";


    if (!$_POST['Password'])
        $Error.="please enter the password <br/>";
    else {


        if (strlen($_POST['Password']) < 8)
            $Error.="the length of pssword must be atleast 8 characters<br/>";
        if (!preg_match('`[A-Z]`', $_POST['Password']))
            $Error.="password should contain atleast one Captial Letter <br/>";
    }
    if ($Error)
        $Error = "there were errors in your signup details<br/>" . $Error;
    else {
        // $password_md=md5(md5($_POST['email'].$_POST['password']));

        $Query = "SELECT * FROM RegisteredUser WHERE EmailAddress='" . mysqli_real_escape_string($Link, $_POST['EmailAddress']) . "'";
        $Result = mysqli_query($Link, $Query);
        $Results = mysqli_num_rows($Result);
        if ($Results)
            $Error = "The email address is already registered .if U want to login IN?";
        else {
            $Query = "INSERT INTO RegisteredUser (FirstName,LastName,EmailAddress,Password,MobileNumber) VALUES('" . mysqli_real_escape_string($Link, $_POST['FirstName']) . "', '" . ($_POST['LastName']) . "', '" . ($_POST['EmailAddress']) . "', '" . ($_POST['Password']) . "', '" . ($_POST['MobileNumber']) . "')";
            mysqli_query($Link, $Query);
            $Msg.="<center>You Were Successfully Signed Up !</center>";
            include 'mail.php';

        }
    }
}
if (isset($_POST['submit'])) {
    if ($_POST['submit'] == "login") {
        $EmailId = mysqli_real_escape_string($Link, $_POST['loginemail']);
        $Passwords = ($_POST['loginpassword']);
        $LoginQuery = "SELECT * FROM RegisteredUser WHERE EmailAddress='$EmailId' AND Password='$Passwords'";
        $Result = mysqli_query($Link, $LoginQuery);
        $Row = mysqli_fetch_row($Result);
        if ($Row) {
            $_SESSION['Id'] = $Row[0];
            print_r($_SESSION);
            header("Location:loginsuccess.php");
        } else {
            $Error = "we could not find a user with the email and password.Sign Up!!";
        }
    }
}
?>
