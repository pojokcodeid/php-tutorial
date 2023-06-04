<?php

session_start();
require __DIR__ . '/inc/flash.php';
require __DIR__ . '/inc/function.php';

const ALLOWED_FILES = [
  'image/jpeg' => 'jpg',
  'image/png' => 'png',
];

const MAX_SIZE = 5 * 1024 * 1024; // 5MB
const UPLOAD_DIR = __DIR__ . '/uploads';

$is_post_request = strtolower($_SERVER['REQUEST_METHOD']) === 'post';
$has_file = isset($_FILES['file']);

if (!$is_post_request || !$has_file) {
  redirect_with_message('File upload tidak validd', FLASH_ERROR);
}

$status = $_FILES['file']['error'];
$filename = $_FILES['file']['name'];
$tmp = $_FILES['file']['tmp_name'];

if ($status !== UPLOAD_ERR_OK) {
  redirect_with_message($messages[$status], FLASH_ERROR);
}

$filesize = filesize($tmp);
if ($filesize > MAX_SIZE) {
  redirect_with_message('Ukuran file anda adalah ' . format_filesize($filesize) .
    ', terlalu besar dari ukuran yang diizinkan ' . format_filesize(MAX_SIZE), FLASH_ERROR);
}

$mime_type = get_mime_type($tmp);
if (!in_array($mime_type, array_keys(ALLOWED_FILES))) {
  redirect_with_message('Type file tidak diizinkan di upload', FLASH_ERROR);
}

// set the filename as the basename + extension
$uploaded_file = pathinfo($filename, PATHINFO_FILENAME) . '.' . ALLOWED_FILES[$mime_type];
// new file location
$filepath = UPLOAD_DIR . '/' . $uploaded_file;

// move the file to the upload dir
$success = move_uploaded_file($tmp, $filepath);
if ($success) {
  redirect_with_message('Upload file telah berhasil.', FLASH_SUCCESS);
}

redirect_with_message('Error memindahkan file ke folder upload.', FLASH_ERROR);