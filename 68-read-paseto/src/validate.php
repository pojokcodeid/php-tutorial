<?php
// header('content-type: application/json');
$token = "";
if (isset($_COOKIE['myToken'])) {
  $exp = $_COOKIE['myExp'];
  $sekarang = time();
  if ($exp <= $sekarang) {
    include 'login.php';
  } else {
    $token = "Authorization: Bearer " . $_COOKIE['myToken'];
  }
} else {
  include 'login.php';
}