<?php
require_once('PHPMailer-master/class.phpmailer.php');
include("PHPMailer-master/class.smtp.php"); 

$mail = new PHPMailer();

$body = "Your are successfully Registered in forummanagement";

$mail->IsSMTP(); 

$mail->Host = "mail.gmail.com"; 

$mail->SMTPDebug = 0;                     

$mail->SMTPAuth = true;                  

$mail->SMTPSecure = "tls";                 

$mail->Host = "smtp.gmail.com";     

$mail->Port = 587;                   

$mail->Username = "yuvashree.b@karmanya.co.in";  

$mail->Password = "Yuvashree@karmanya";           
$mail->SetFrom('yuvashree.b@karmanya.co.in', 'yuva');
$mail->AddReplyTo("yuvashree.b@karmanya.co.in", "yuva");
$mail->Subject = "Registration Complete";
$mail->AltBody = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
$mail->MsgHTML($body);
$Address =$_POST['EmailAddress'];
$mail->AddAddress($Address, success);
if (!$mail->Send()) {
    $Error.= $mail->ErrorInfo;
}
else{
    $Msg.="Successfully Sent to your mail";
}
?>