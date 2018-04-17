<?php
// require_once 'PHPMailer/class.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/Exception.php';



// Configuring SMTP server settings
$mail = new PHPMailer;
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth = true;
$mail->Username = 'telfzer@gmail.com';
$mail->Password = '0823805537a';
  $mail->setFrom('telfzer@gmail.com', 'Reznov P.');

// Email Sending Details
$mail->addAddress('pompomjunejune@gmail.com','desktop error');
$mail->Subject = 'Block Annotation';
$mail->msgHTML("บัญชีคุณถูกบล็อก zzazaaz");

// Success or Failure
if (!$mail->send()) {
$error = "Mailer Error: " . $mail->ErrorInfo;
echo '<p>'.$error.'</p>';
}
else {
echo '<p>Message sent!</p>';
}

?>