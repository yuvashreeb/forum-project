<?php

error_reporting(0);
include("connection.php");
$UserQuery = "SELECT * FROM RegisteredUser WHERE Id='" . $_SESSION['id'] . "' LIMIT 1";
$UserResult = mysqli_query($link, $UserQuery);
$row = mysqli_fetch_array($UserResult);
$UserName = $row['FirstName'];
$UserLastName = $row['LastName'];
$UserEmail = $row['EmailAddress'];
$UserMobile = $row['MobileNumber'];
$UserAdressOne = $row['AddressOne'];
$UserAdressTwo = $row['AddressTwo'];
$UserCity = $row['City'];
$UserState = $row['State'];
$UserCountry = $row['Country'];
$UserZipCode = $row['ZipCode'];

if (isset($_POST['Update']) == "Update") {

    $error = "";

    if (!$_POST['AddressOne']) {
        $error.="please enter the AddressOne<br/>";
    }
    if (!$_POST['AddressTwo']) {
        $error.="please enter the AddressTwo<br/>";
    }
    if (!$_POST['City']) {
        $error.="please enter the City<br/>";
    }
    if (!$_POST['State']) {
        $error.="please enter the State<br/>";
    }
    if (!$_POST['Country']) {
        $error.="please enter the Country<br/>";
    }
    if (!$_POST['ZipCode']) {
        $error.="please enter the ZipCode<br/>";
    }

    if ($error)
        $error = "there were errors in your Update details<br/>" . $error;
    else {

        $UserQuery = 'UPDATE RegisteredUser SET AddressOne="' . ($_POST['AddressOne']) . '",AddressTwo="' . ($_POST['AddressTwo']) . '",City="' . ($_POST['City']) . '",State="' . ($_POST['State']) . '",Country="' . ($_POST['Country']) . '",ZipCode="' . ($_POST['ZipCode']) . '" WHERE Id="' . $_SESSION['id'] . '" LIMIT 1';

        if ($UserResult = mysqli_query($link, $UserQuery))
            $msg.="your Profile were successfully Updated!";
        $row = mysqli_fetch_array($UserResult);
        print_r($row);
    }
}
?>