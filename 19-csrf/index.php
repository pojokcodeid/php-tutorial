<?php

// CSRF (Cross-site request forgery) adalah sebuah kerentanan keamanan web yang memungkinkan penyerang untuk membuat pengguna melakukan aksi yang tidak mereka inginkan.

session_start();
require __DIR__ . '/inc/header.php';

$errors = [];
$inputs = [];

$request_method = $_SERVER['REQUEST_METHOD'];
if ($request_method === 'GET') {
  $_SESSION['token'] = bin2hex(random_bytes(35));
  require __DIR__ . '/inc/get.php';
} elseif ($request_method === 'POST') {
  //lakukan process
  require __DIR__ . '/inc/post.php';
  //penanganan error
  if ($errors) {
    require __DIR__ . '/inc/get.php';
  }
}

require __DIR__ . '/inc/footer.php';