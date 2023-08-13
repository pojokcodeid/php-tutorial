<?php
// header('content-type: application/json');
$token = "";
if (isset($_COOKIE['myToken'])) {
  $tokenPart = explode(".", $_COOKIE['myToken']);
  $payload = json_decode(base64_decode($tokenPart[1]), true);
  $exp = $payload['exp'];
  $sekarang = time();
  if ($exp <= $sekarang) {
    include 'login.php';
  } else {
    $token = "Authorization: Bearer " . $_COOKIE['myToken'];
  }
} else {
  include 'login.php';
}