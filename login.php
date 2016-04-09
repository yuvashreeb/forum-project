<?php

error_reporting(0);
session_start();
/* if ($_GET['logout'] == 1 AND $_SESSION['id']) {
  session_destroy();
  $msg = "you have been successfully logged out!";
  } */
include("connection.php");
if (isset($_POST['submit']) == "Sign Up") {
    $error = "";

    if (!$_POST['EmailAddress'])
        $error.="please enter the email id <br/>";
    else if (!(filter_var($_POST['EmailAddress'], FILTER_VALIDATE_EMAIL)))
        $error.="please enter valid email id <br/>";


    if (!$_POST['Password'])
        $error.="please enter the password <br/>";
    else {


        if (strlen($_POST['Password']) < 8)
            $error.="the length of pssword must be atleast 8 characters<br/>";
        if (!preg_match('`[A-Z]`', $_POST['Password']))
            $error.="password should contain atleast one Captial Letter <br/>";
    }
    if ($error)
        $error = "there were errors in your signup details<br/>" . $error;
    else {
        // $password_md=md5(md5($_POST['email'].$_POST['password']));

        $query = "SELECT * FROM RegisteredUser WHERE EmailAddress='" . mysqli_real_escape_string($link, $_POST['EmailAddress']) . "'";
        $result = mysqli_query($link, $query);
        $results = mysqli_num_rows($result);
        if ($results)
            $error = "The email address is already registered .if U want to login IN?";
        else {
            $query = "INSERT INTO RegisteredUser (FirstName,LastName,EmailAddress,Password,MobileNumber) VALUES('" . mysqli_real_escape_string($link, $_POST['FirstName']) . "', '" . ($_POST['LastName']) . "', '" . ($_POST['EmailAddress']) . "', '" . ($_POST['Password']) . "', '" . ($_POST['MobileNumber']) . "')";
            mysqli_query($link, $query);
            $msg.="<center>You Were Successfully Signed Up !</center>";
            $_SESSION['id'] = mysqli_insert_id($link);
        }
    }
}

/* if (isset($_POST['submit'])=='Log In') {
  alert('hello');
  $x = mysqli_real_escape_string($link, $_POST['LoginEmail']);
  $y = ($_POST['LoginPassword']);
  $login_que = "SELECT * FROM RegisteredUser WHERE EmailAddress='$x' AND Password='$y'";
  //$query="SELECT * FROM users WHERE email='".mysqli_real_escape_string($link,$_POST['loginemail'])."' AND password='".md5(md5($_POST['loginemail'].$_POST['loginpassword']))."'";
  $result1 = mysqli_query($link, $login_que);
  $row = mysqli_fetch_array($result1);
  //print_r($row);
  if ($row) {
  $_SESSION['id'] = $row['id'];
  //header("Location:loginsuccess.php");
  } else {
  $error = "we could not find a user with the email and password.Sign Up!!";
  }
  } */
if (isset($_POST['submit'])) {
    if ($_POST['submit'] == "login") {

        $x = mysqli_real_escape_string($link, $_POST['loginemail']);
        $y = ($_POST['loginpassword']);
        $login_que = "SELECT * FROM RegisteredUser WHERE EmailAddress='$x' AND Password='$y'";
        //$query="SELECT * FROM users WHERE email='".mysqli_real_escape_string($link,$_POST['loginemail'])."' AND password='".md5(md5($_POST['loginemail'].$_POST['loginpassword']))."'"; 
        $result1 = mysqli_query($link, $login_que);
        $row = mysqli_fetch_array($result1);
        //print_r($row);
        if ($row) {
            $_SESSION['id'] = $row['id'];
            //print_r($_SESSION);
            header("Location:loginsuccess.php");
        } else {
            $error = "we could not find a user with the email and password.Sign Up!!";
        }
    }
}
?>
