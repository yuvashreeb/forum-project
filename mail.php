<?php

require_once('PHPMailer-master/class.phpmailer.php');
include("PHPMailer-master/class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded

$mail = new PHPMailer();

$body = "Your are successfully Registered in forummanagement";

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
$mail->AddReplyTo("yuvashree.b@karmanya.co.in", "yuva");
$mail->Subject = "Registration Complete";
$mail->AltBody = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
$mail->MsgHTML($body);
$address =$_POST['EmailAddress'];
$mail->AddAddress($address, success);
if (!$mail->Send()) {

    $error.= $mail->ErrorInfo;
}
else{
    $msg.="Successfully Sent to your mail";
}
?>