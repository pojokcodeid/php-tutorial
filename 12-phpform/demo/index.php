<?php
require __DIR__ . '/inc/header.php';
$request_method = strtoupper($_SERVER['REQUEST_METHOD']);

if ($request_method === 'GET'):
    require __DIR__ . '/inc/get.php';
else:
    require __DIR__ . '/inc/post.php';
endif;

require __DIR__ . '/inc/footer.php';
?>