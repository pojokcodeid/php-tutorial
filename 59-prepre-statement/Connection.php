<?php

class Connection
{
  private static $host = 'localhost';
  private static $user = 'root';
  private static $pass = '';
  private static $db = 'latihan';

  public static function getConnection()
  {
    try {
      $conn = new PDO("mysql:host=" . self::$host . ";dbname=" . self::$db, self::$user, self::$pass);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      return $conn;
    } catch (PDOException $e) {
      echo $e->getMessage();
      return null;
    }
  }
}