<?php

require __DIR__ . '/inc/header.php';

$errors = [];
$inputs = [];
$request_metod = strtoupper($_SERVER['REQUEST_METHOD']);
if ($request_metod === 'GET') {
  require __DIR__ . '/inc/get.php';
} elseif ($request_metod === 'POST') {
  require __DIR__ . '/inc/post.php';
  if (count($errors) > 0) {
    require __DIR__ . '/inc/get.php';
  }
}

require __DIR__ . '/inc/footer.php';