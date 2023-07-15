<?php

$host = "127.0.0.1";
$db = "latihan";
$user = "postgres";
$pass = "";

$dsn = "pgsql:host=$host;port=5432;dbname=$db";

try {
  $pdo = new PDO($dsn, $user, $pass);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  if ($pdo) {
    echo "Koneksi Berhasil";
  }
} catch (PDOException $e) {
  echo "Koneksi Gagal : " . $e->getMessage();
}