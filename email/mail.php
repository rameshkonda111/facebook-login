<?php
require_once('class.phpmailer.php');
$mail             = new PHPMailer();

//$body             = file_get_contents('contents.html');
//$body             = eregi_replace("[\]",'',$body);
$body = "Hai dude";

$mail->IsSMTP(); // telling the class to use SMTP
$mail->Host       = "mail.gmail.com"; // SMTP server
$mail->SMTPDebug  = 2;                     // enables SMTP debug information (for testing)
                                           // 1 = errors and messages
                                           // 2 = messages only
$mail->SMTPAuth   = true;                  // enable SMTP authentication
$mail->SMTPSecure = "tls";                 // sets the prefix to the servier
$mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
$mail->Port       = 587;                   // set the SMTP port for the GMAIL server
$mail->Username   = "rameshkonda111@gmail.com";  // GMAIL username
$mail->Password   = "";            // GMAIL password

$mail->SetFrom('rameshkonda111@gmail.com', 'ramesh');

//$mail->AddReplyTo("rameshkonda111@gmail.com","ramesh");

$mail->Subject    = "PHPMailer Test Subject via smtp (Gmail), basic";

$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test

$mail->MsgHTML($body);

$address = "rameshkonda111@gmail.com";
$mail->AddAddress($address, "John Doe");

//$mail->AddAttachment("images/phpmailer.gif");      // attachment
//s$mail->AddAttachment("images/phpmailer_mini.gif"); // attachment

if(!$mail->Send()) {
  echo "Mailer Error: ";
} else {
  echo "Message sent!";
}
    
?>