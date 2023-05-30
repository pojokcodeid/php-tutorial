<?php

$contact = isset($_POST['contact']) ? $_POST['contact'] : '';

$contact = strip_tags($contact);
$contact = trim(preg_replace('/[^A-Za-z0-9 ]/', '', $contact));

if ($contact && array_key_exists($contact, $contacts)) {
  $contact = htmlspecialchars($contact);
} else {
  $errors['contact'] = 'Silahkan memilih metode untuk menghubungi anda';
}

if (count($errors)) {
  require __DIR__ . '/get.php';
} else {
  echo <<<html
  Pilihan kontak anada alalah <strong>$contact</strong>
  <a href="index.php">Kembali</a>
  html;
}