<?php

const MESSAGES = [
  UPLOAD_ERR_OK => 'File berhasil diupload',
  UPLOAD_ERR_INI_SIZE => 'Ukuran file terlalu besar',
  UPLOAD_ERR_FORM_SIZE => 'Ukuran file terlalu besar',
  UPLOAD_ERR_PARTIAL => 'File tidak terupload',
  UPLOAD_ERR_NO_FILE => 'File tidak terupload',
  UPLOAD_ERR_NO_TMP_DIR => 'Folder tmp tidak ditemukan',
  UPLOAD_ERR_CANT_WRITE => 'Tidak dapat menulis file',
  UPLOAD_ERR_EXTENSION => 'Ekstensi tidak sesuai'
];

function get_mime_type(string $filename): string
{
  $info = finfo_open(FILEINFO_MIME_TYPE);
  if (!$info) {
    return false;
  }

  $mime_type = finfo_file($info, $filename);
  finfo_close($info);
  return $mime_type;
}

function format_filesize(int $bytes, int $decimals = 2): string
{
  $units = 'BKMGTP';
  $factor = floor((strlen($bytes) - 1) / 3);
  return sprintf("%.{$decimals}f", $bytes / pow(1024, $factor)) . $units[(int) $factor];
}

function redirect_with_message(string $message, string $type = FLASH_ERROR, string $name = 'upload', string $location = 'index.php'): void
{
  flash($name, $message, $type);
  header("Location: $location", true, 303);
  exit;
}

// hanya tambahan ini saja dengan yang sebelumnya
function format_messages(string $title, array $messages): string
{
  $message = "<p>$title</p>";
  $message .= '<ul>';
  foreach ($messages as $key => $value) {
    $message .= "<li>$value</li>";
  }
  $message .= '<ul>';

  return $message;
}