<?php
error_reporting(0);
include("connection.php");
$AdminQuery = "SELECT Name FROM Admin WHERE Id='" . $_SESSION['id'] . "' LIMIT 1";
$result = mysqli_query($link, $AdminQuery);
$row = mysqli_fetch_array($result);
$AdminName = $row['Name'];
if (isset($_POST['AddUser']) == "AddUser") {
    $error = "";

    if (!$_POST['FirstName']) {
        $error.="please enter the FirstName<br/>";
    }
    if (!$_POST['LastName']) {
        $error.="please enter the LastName<br/>";
    }
    if (!$_POST['EmailAddress'])
        $error.="please enter the email id <br/>";
    else if (!(filter_var($_POST['EmailAddress'], FILTER_VALIDATE_EMAIL)))
        $error.="please enter valid email id <br/>";
    if (!$_POST['Password'])
        $error.="please enter the Password <br/>";

    if (!$_POST['ConfirmPassword'])
        $error.="please enter the ConfirmPassword <br/>";
    else if ($_POST['Password'] != $_POST['ConfirmPassword'])
        $error.="please enter the ConfirmPassword same as Password <br/>";

    else if (!$_POST['MobileNumber'])
        $error.="please enter the Mobile <br/>";

    else {
        if (strlen($_POST['Password']) < 8)
            $error.="the length of pssword must be atleast 8 characters<br/>";
        if (!preg_match('`[A-Z]`', $_POST['Password']))
            $error.="password should contain atleast one Captial Letter <br/>";
    }
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
        $error = "there were errors in your Registration details<br/>" . $error;
    else {
        $query = "SELECT * FROM RegisteredUser WHERE EmailAddress'" . mysqli_real_escape_string($link, $_POST['EmailAddress']) . "'";
        $result = mysqli_query($link, $query);
        $results = mysqli_num_rows($result);
        if ($results)
            $error = "The email address is already registered .Create with different ";
        else {
            $query = "INSERT INTO RegisteredUser(FirstName,LastName,EmailAddress,MobileNumber,Password,AddressOne,AddressTwo,City,State,Country,Zipcode) VALUES('" . ($_POST['FirstName']) . "','" . ($_POST['LastName']) . "','" . mysqli_real_escape_string($link, $_POST['EmailAddress']) . "','" . ($_POST['MobileNumber']) . "', '" . ($_POST['Password']) . "','" . ($_POST['AddressOne']) . "','" . ($_POST['AddressTwo']) . "','" . ($_POST['City']) . "','" . ($_POST['State']) . "','" . ($_POST['Country']) . "','" . ($_POST['ZipCode']) . "')";


            mysqli_query($link, $query);
            $msg.="User has been successfully registered!";
        }
    }
}

if (isset($_POST['UpdateUser']) == "UpdateUser") {
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

        $UserQuery = 'UPDATE RegisteredUser SET AddressOne="' . ($_POST['AddressOne']) . '",AddressTwo="' . ($_POST['AddressTwo']) . '",City="' . ($_POST['City']) . '",State="' . ($_POST['State']) . '",Country="' . ($_POST['Country']) . '",ZipCode="' . ($_POST['ZipCode']) . '" WHERE Id="'.$_GET['Id'].'" LIMIT 1';

        if ($UserResult = mysqli_query($link, $UserQuery))
            $msg.="your Profile were successfully Updated!";
        $row = mysqli_fetch_array($UserResult);
        print_r($row);
    }
}
if(isset($_POST['DeleteProfile']))
{
   $DeleteQuery='DELETE FROM RegisteredUser WHERE Id="'.$_GET['Id'].'" LIMIT 1';
   $DeleteResult=mysqli_query($link,$DeleteQuery);
   if($DeleteResult)
       $msg.="Your Profile Has beeen Successfully deleted.";
}

?>
