<?php
include("connection.php");
include('login.php');
if(isset($_POST["ChangePassword"])){
session_start();
$QueryChange="SELECT Password FROM RegisteredUser WHERE Id='" . $_SESSION['Id'] . "' LIMIT 1";
$ResultChange=mysqli_query($Link,$QueryChange);
if(!$ResultChange){
    $Error.="Please enter the correct current password";
}
else{
$Row=mysqli_fetch_row($ResultChange);
$CurrentPassword=$_POST["CurrentPassword"];
$NewPassword=$_POST["NewPassword"];
if($CurrentPassword==$Row[0]){
    $QueryUpdate="UPDATE RegisteredUser SET Password='$NewPassword' WHERE Id='" . $_SESSION['Id'] . "'";
    $ResultUpdate=mysqli_query($Link,$QueryUpdate);
    if($ResultUpdate){
        $Msg.="Password changed successfully";
    }
}
 else {
     $Error.="Invalid password";
}
}
}
?>