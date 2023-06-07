<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$email = 'pojokcodeid@gmail.com';
$judul = 'Test email';
$pesan = 'Ini adalah test email';

$mail = new PHPMailer();

try {
  $mail->SMTPDebug = 2;
  $mail->isSMTP();
  $mail->Host = 'smtp.gmail.com';
  $mail->SMTPAuth = true;
  $mail->Username = 'asep.xxxxxxxxxxx@gmail.com';
  $mail->Password = 'xxxxxxxxxxxxxxxx';
  $mail->SMTPSecure = 'tls';
  $mail->Port = 587;

  $mail->setFrom('aasseepp@gmail.com', 'pojokcode.com');
  $mail->addAddress($email);

  $mail->isHTML(true);
  $mail->Subject = $judul;
  $mail->Body = $pesan;
  $mail->AltBody = '';

  $mail->send();
  echo 'Message has been sent';
} catch (Exception $e) {
  echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

echo '<script>alert("Email berhasil dikirim");</script>'
  ?>
