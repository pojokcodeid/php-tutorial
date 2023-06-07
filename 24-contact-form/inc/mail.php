<?php
//ini wajib dipanggil paling atas
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//ini sesuaikan foldernya ke file 3 ini
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

// get email from the config file
$config = [
  'mail' => [
    'to_email' => 'xxxxxxxxx@gmail.com'
  ]
];
$email = $config['mail']['to_email'];

// contact information
$contact_name = $inputs['name'];
$contact_email = $inputs['email'];
$pesan = $inputs['message'];
$judul = $inputs['subject'];

$mail = new PHPMailer(true);
// try {
//Server settings
$mail->SMTPDebug = 2; //Enable verbose debug output
$mail->isSMTP(); //Send using SMTP
$mail->Host = 'smtp.gmail.com'; //Set the SMTP server to send through
$mail->SMTPAuth = true; //Enable SMTP authentication
$mail->Username = 'xxxxxxxxxxxxxxxx@gmail.com'; //SMTP username
$mail->Password = 'xxxxxxxxxxxxxxx'; //SMTP password
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