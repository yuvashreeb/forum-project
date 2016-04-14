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
        include("PHPMailer-master/class.smtp.php");

        $mail = new PHPMailer();

        $Body = "Your Password is: " . $Row["1"];

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