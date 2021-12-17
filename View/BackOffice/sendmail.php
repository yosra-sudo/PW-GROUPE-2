<?php
if (isset($_POST['message']) && isset($_POST['subject'])) {
require '../PHPMailer/PHPMailerAutoload.php';


$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'aveaveyro15@gmail.com';                 // SMTP username
$mail->Password = 'ellaba200';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, ssl also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('noreply@livre.com', 'no-reply');
$mail->addAddress($_POST['email']);     // Add a recipient
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);   



$mail->Subject = $_POST['subject'];
$mail->Body = $_POST['message'];
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}
}
//---------------------end sending mail -----------//
/*

header('Location: Utilisateur.php');*/
/*
else {
    header('Location: afficherprestataire.php');
}*/


?>