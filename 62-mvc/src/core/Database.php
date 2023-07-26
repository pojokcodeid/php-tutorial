<?php 

class Database{
  private static $host= DB_HOST;
  private static $user= DB_USER;
  private static $pass= DB_PASS;
  private static $dbname= DB_NAME;

  private $conn;

  public function __construct(){
    $this->conn = self::setConnection();
  }

  private static function setConnection(){
    try{
      $conn = new PDO("mysql:host=".self::$host.";dbname=".self::$dbname, self::$user, self::$pass);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      return $conn;
    }catch(PDOException $e){
      die('Koneksi error : '.$e->getMessage());
    }
  }

  public function getConnection(){
    return $this->conn;
  }
}