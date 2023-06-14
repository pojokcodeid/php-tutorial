<?php
//ini wajib dipanggil paling atas
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//ini sesuaikan foldernya ke file 3 ini
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';


function kirim_email(
  string $penerima,
  string $nama_penerima,
  string $email_pengirim,
  string $title,
  string $konten
) {
  //set email penerima
  $email = $penerima;

  // contact information
  $contact_name = $nama_penerima;
  $contact_email = $email_pengirim;
  $pesan = $konten;
  $judul = $title;

  $mail = new PHPMailer(true);
  // try {
//Server settings
  $mail->SMTPDebug = 2; //Enable verbose debug output
  $mail->isSMTP(); //Send using SMTP
  $mail->Host = 'smtp.gmail.com'; //Set the SMTP server to send through
  $mail->SMTPAuth = true; //Enable SMTP authentication
  $mail->Username = 'asep.010801503125082@gmail.com'; //SMTP username
  $mail->Password = 'puvqwhloszpesvii'; //SMTP password
  $mail->SMTPSecure = 'tls'; //Enable implicit TLS encryption
  $mail->Port = 587; //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

  //pengirim
  $mail->setFrom($contact_email, $contact_name);
  $mail->addAddress($email); //Add a recipient

  //Content
  $mail->isHTML(true); //Set email format to HTML
  $mail->Subject = $judul;
  $mail->Body = $pesan;
  $mail->AltBody = '';
  //$mail->AddEmbeddedImage('gambar/logo.png', 'logo'); //abaikan jika tidak ada logo
//$mail->addAttachment(''); 

  $mail->send();
}