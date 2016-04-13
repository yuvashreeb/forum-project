<?php
include ('connection.php');
if (isset($_POST["submit"])) {
    $Email = $_POST["EmailForgot"];
    $Query = "select FirstName, Password from RegisteredUser where EmailAddress='$Email'";
    $Result = mysqli_query($Link, $Query);
    $Row = mysqli_fetch_row($Result);
    if (!$Row) {
        $Error = "This email address is not registered";
    } else {

        $Message = "Passowrd has been sent to your email Id";
        require_once('PHPMailer-master/class.phpmailer.php');
        include("PHPMailer-master/class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded

        $mail = new PHPMailer();

        $Body = "Your Password is: " . $Row["1"];

        $mail->IsSMTP(); // telling the class to use SMTP

        $mail->Host = "mail.gmail.com"; // SMTP server

        $mail->SMTPDebug = 0;                     // enables SMTP debug information (for testing)

        $mail->SMTPAuth = true;                  // enable SMTP authentication

        $mail->SMTPSecure = "tls";                 // sets the prefix to the servier

        $mail->Host = "smtp.gmail.com";      // sets GMAIL as the SMTP server

        $mail->Port = 587;                   // set the SMTP port for the GMAIL server

        $mail->Username = "yuvashree.b@karmanya.co.in";  // GMAIL username

        $mail->Password = "Yuvashree@karmanya";            // GMAIL password



        $mail->SetFrom('yuvashree.b@karmanya.co.in', 'yuva');
        $mail->AddReplyTo("yuvashree.b@karmanya.co.in", 'yuva');
        $mail->Subject = "Registration Complete";
        $mail->AltBody = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
        $mail->MsgHTML($Body);
        $Address = $Email;
        $mail->AddAddress($Address, $Email);
        if (!$mail->Send()) {

            $Error.= $mail->ErrorInfo;
        }
    }
}
?>