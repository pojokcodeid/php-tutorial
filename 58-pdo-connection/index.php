<?php

$host = "localhost";
$db = "latihan";
$user = "root";
$pass = "";

$dsn = "mysql:host=$host;dbname=$db;charset=utf8";
try {
  $pdo = new PDO($dsn, $user, $pass);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  if ($pdo) {
    echo "Koneksi Berhasil";
  }
} catch (PDOException $e) {
  echo "Koneksi Gagal : " . $e->getMessage();
}