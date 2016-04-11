<?php
include("connection.php");
include('login.php');
if(isset($_POST["ChangePassword"])){
session_start();
//print_r($_SESSION);
$queryChange="SELECT Password FROM RegisteredUser WHERE Id='" . $_SESSION['id'] . "' LIMIT 1";
$resultChange=mysqli_query($link,$queryChange);
//$row=mysqli_fetch_row($resultChnage);
if(!$resultChange){
    $error.="Please enter the correct current password";
}
else{
$row=mysqli_fetch_row($resultChange);
$CurrentPassword=$_POST["CurrentPassword"];
$NewPassword=$_POST["NewPassword"];
if($CurrentPassword==$row[0]){
    $queryupdate="UPDATE RegisteredUser set Password='$NewPassword' where Id='" . $_SESSION['id'] . "'";
    $resultupdate=mysqli_query($link,$queryupdate);
    if($resultupdate){
        $msg.="Password changed successfully";
    }
}
 else {
     $error.="Invalid password";
}
}
}
?>