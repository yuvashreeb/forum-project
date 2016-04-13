<?php

error_reporting(0);
include("connection.php");
$AdminQuery = "SELECT Name FROM Admin WHERE Id='" . $_SESSION['id'] . "' LIMIT 1";
$Result = mysqli_query($Link, $AdminQuery);
$Row = mysqli_fetch_array($Result);
$AdminName = $row['Name'];
if (isset($_POST['AddUser']) == "AddUser") {
    $Error = "";

    if (!$_POST['FirstName']) {
        $Error.="please enter the FirstName<br/>";
    }
    if (!$_POST['LastName']) {
        $Error.="please enter the LastName<br/>";
    }
    if (!$_POST['EmailAddress']){
        $Error.="please enter the email id <br/>";
    }
    else if (!(filter_var($_POST['EmailAddress'], FILTER_VALIDATE_EMAIL)))
    {
        $Error.="please enter valid email id <br/>";
    }
    if (!$_POST['Password'])
        $Error.="please enter the Password <br/>";

    if (!$_POST['ConfirmPassword'])
        $Error.="please enter the ConfirmPassword <br/>";
    else if ($_POST['Password'] != $_POST['ConfirmPassword'])
        $Error.="please enter the ConfirmPassword same as Password <br/>";

    else if (!$_POST['MobileNumber'])
        $Error.="please enter the Mobile <br/>";
    else if (!preg_match("/^[1-9][0-9]{9,9}$/", $_POST['MobileNumber']))
        $Error.="please enter valid Mobile <br/>";
    else {
        if (strlen($_POST['Password']) < 8)
            $Error.="the length of pssword must be atleast 8 characters<br/>";
        if (!preg_match('`[A-Z]`', $_POST['Password']))
            $Error.="password should contain atleast one Captial Letter <br/>";
    }
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
        $Error = "there were errors in your Registration details<br/>" . $error;
    else {
        $Query = "SELECT * FROM RegisteredUser WHERE EmailAddress'" . mysqli_real_escape_string($Link, $_POST['EmailAddress']) . "'";
        $Result = mysqli_query($Link, $Query);
        $Results = mysqli_num_rows($Result);
        if ($Results)
            $Error = "The email address is already registered .Create with different ";
        else {
            $Query = "INSERT INTO RegisteredUser(FirstName,LastName,EmailAddress,MobileNumber,Password,AddressOne,AddressTwo,City,State,Country,Zipcode) VALUES('" . ($_POST['FirstName']) . "','" . ($_POST['LastName']) . "','" . mysqli_real_escape_string($Link, $_POST['EmailAddress']) . "','" . ($_POST['MobileNumber']) . "', '" . ($_POST['Password']) . "','" . ($_POST['AddressOne']) . "','" . ($_POST['AddressTwo']) . "','" . ($_POST['City']) . "','" . ($_POST['State']) . "','" . ($_POST['Country']) . "','" . ($_POST['ZipCode']) . "')";


            mysqli_query($Link, $Query);
            $Msg.="User has been successfully registered!";
        }
    }
}

if (isset($_POST['UpdateUser']) == "UpdateUser") {
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

        $UserQuery = 'UPDATE RegisteredUser SET AddressOne="' . ($_POST['AddressOne']) . '",AddressTwo="' . ($_POST['AddressTwo']) . '",City="' . ($_POST['City']) . '",State="' . ($_POST['State']) . '",Country="' . ($_POST['Country']) . '",ZipCode="' . ($_POST['ZipCode']) . '" WHERE Id="' . $_GET['Id'] . '" LIMIT 1';

        if ($UserResult = mysqli_query($Link, $UserQuery))
            $Msg.="your Profile were successfully Updated!";
        $Row = mysqli_fetch_array($UserResult);
        print_r($Row);
    }
}
if (isset($_POST['DeleteProfile'])) {
    $DeleteQuery = 'DELETE FROM RegisteredUser WHERE Id="' . $_GET['Id'] . '" LIMIT 1';
    $DeleteResult = mysqli_query($Link, $DeleteQuery);
    if ($DeleteResult)
        $Msg.="Your Profile Has beeen Successfully deleted.";
}
?>
