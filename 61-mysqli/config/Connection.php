<?php

class Connection
{
  private static $host = "localhost";
  private static $user = "root";
  private static $pass = "";
  private static $db = "latihan";

  public static function getConnection()
  {
    try {
      $conn = new mysqli(self::$host, self::$user, self::$pass, self::$db);
      if ($conn->connect_error) {
        throw new Exception($conn->connect_error);
      }
      return $conn;
    } catch (Exception $e) {
      die("Koneksi gagal: " . $e->getMessage());
    }
  }
}