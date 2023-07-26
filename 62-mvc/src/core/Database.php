<?php 

class Database{
  private $host= DB_HOST;
  private $user= DB_USER;
  private $pass= DB_PASS;
  private $dbname= DB_NAME;

  private $conn;

  public function __construct(){
    $this->conn = $this->setConnection();
  }

  protected function setConnection(){
    try{
      $conn = new PDO("mysql:host=".$this->host.";dbname=".$this->dbname, $this->user, $this->pass);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      return $conn;
    }catch(PDOException $e){
      die('Koneksi error : '.$e->getMessage());
    }
  }

  public function get($query){
    $stmt = $this->conn->prepare($query);
    $stmt->execute();
    return $stmt;
  }

  public function qry($query, $params = array()){
    $stmt = $this->conn->prepare($query);
    $stmt->execute($params);
    return $stmt;
  }
}