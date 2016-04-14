<?php
error_reporting(0);
include("connection.php");
$UserQuery = "SELECT * FROM RegisteredUser WHERE Id='" . $_SESSION['Id'] . "' LIMIT 1";
$UserResult = mysqli_query($Link, $UserQuery);
$Row = mysqli_fetch_array($UserResult);
$UserName = $Row['FirstName'];
$UserLastName = $Row['LastName'];
$UserEmail = $Row['EmailAddress'];
$UserMobile = $Row['MobileNumber'];
$UserAdressOne = $Row['AddressOne'];
$UserAdressTwo = $Row['AddressTwo'];
$UserCity = $Row['City'];
$UserState = $Row['State'];
$UserCountry = $Row['Country'];
$UserZipCode = $Row['ZipCode'];
if (isset($_POST['Update']) == "Update") {
    $Error = "";
    if (!$_POST['AddressOne']) {
        $Error.="please enter the AddressOne<br/>";
    }
    if (!$_POST['AddressTwo']) {
        $Error.="please enter the AddressTwo<br/>";
    }
    if (!$_POST['City']) {
        $Error.="please enter the City<br/>";
    }
    if (!$_POST['State']) {
        $Error.="please enter the State<br/>";
    }
    if (!$_POST['Country']) {
        $Error.="please enter the Country<br/>";
    }
    if (!$_POST['ZipCode']) {
        $Error.="please enter the ZipCode<br/>";
    }

    if ($Error)
        $Error = "there were errors in your Update details<br/>" . $Error;
    else {
        $UserQuery = 'UPDATE RegisteredUser SET AddressOne="' . ($_POST['AddressOne']) . '",AddressTwo="' . ($_POST['AddressTwo']) . '",City="' . ($_POST['City']) . '",State="' . ($_POST['State']) . '",Country="' . ($_POST['Country']) . '",ZipCode="' . ($_POST['ZipCode']) . '" WHERE Id="' . $_SESSION['Id'] . '" LIMIT 1';
        if ($UserResult = mysqli_query($Link, $UserQuery))
            $Msg.="your Profile was successfully Updated!";
        $Row = mysqli_fetch_array($UserResult);
        print_r($Row);
    }
}
?>