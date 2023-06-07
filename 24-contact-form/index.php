<?php
// panduan
// https://gilacoding.com/read/cara-kirim-email-sederhana-dengan-php-mailer
// tempat lib untuk download
// https://github.com/PHPMailer/PHPMailer

session_start();

require_once __DIR__ . '/inc/header.php';

$errors = [];
$inputs = [];

$request_method = strtoupper($_SERVER['REQUEST_METHOD']);

if ($request_method === 'GET') {

  // show the message
  if (isset($_SESSION['message'])) {
    $message = $_SESSION['message'];
    unset($_SESSION['message']);
  } elseif (isset($_SESSION['inputs']) && isset($_SESSION['errors'])) {
    $errors = $_SESSION['errors'];
    unset($_SESSION['errors']);
    $inputs = $_SESSION['inputs'];
    unset($_SESSION['inputs']);
  }
  // show the form
  require_once __DIR__ . '/inc/get.php';
} elseif ($request_method === 'POST') {
  // check the honeypot and validate the field
  require_once __DIR__ . '/inc/post.php';

  if (!$errors) {
    // send an email
    try {
      require_once __DIR__ . '/inc/mail.php';
      $_SESSION['message'] = '
      <div class="alert alert-success">
      Terima kasih sudah menghubungi kami! Kami akan segera menghubungi Anda.
      </div>';
    } catch (Exception $e) {
      $_SESSION['errors'] = $errors;
      $_SESSION['message'] = '
      <div class="alert alert-error">
      Process gagal, ' . $e->getMessage() .
        '</div>';
    }
  } else {
    $_SESSION['errors'] = $errors;
    $_SESSION['inputs'] = $inputs;
  }

  header('Location: index.php', true, 303);
  exit;
}

require_once __DIR__ . '/inc/footer.php';