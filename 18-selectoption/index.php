<?php

require __DIR__ . '/inc/header.php';

$request_method = $_SERVER['REQUEST_METHOD'];
if ($request_method === 'GET') {
  require __DIR__ . '/inc/get.php';
} elseif ($request_method === 'POST') {
  require __DIR__ . '/inc/post.php';
}

require __DIR__ . '/inc/footer.php';