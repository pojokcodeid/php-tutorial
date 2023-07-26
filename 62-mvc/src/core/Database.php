<?php

class Database
{
  private $conn;

  public function __construct()
  {
    $this->conn = $this->setConnection();
  }

  protected function setConnection()
  {
    try {
      $conn = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      return $conn;
    } catch (PDOException $e) {
      die('Koneksi error : ' . $e->getMessage());
    }
  }

  public function get($query)
  {
    $stmt = $this->conn->prepare($query);
    $stmt->execute();
    return $stmt;
  }

  public function qry($query, $params = array())
  {
    $stmt = $this->conn->prepare($query);
    $stmt->execute($params);
    return $stmt;
  }
}