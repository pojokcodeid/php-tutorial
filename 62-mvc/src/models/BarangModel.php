<?php 

class BarangModel{
  private $db;

  public function __construct(){
    $db = new Database();
    $this->db = $db->getConnection();
  }

  public function getAll(){
    $query = "SELECT * FROM barang";
    $stmt = $this->db->query($query);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function getById($id){
    $query = "SELECT * FROM barang WHERE barang_id = :id";
    $stmt = $this->db->prepare($query);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }

  // insert data
  public function insert(array $data)
  {
    $query = "INSERT INTO barang (nama_barang, jumlah, harga_satuan, expire_date) VALUES (:nama_barang, :jumlah, :harga, :kadaluarsa)";
    $stmt = $this->db->prepare($query);
    $stmt->bindParam(':nama_barang', $data['nama_barang'],PDO::PARAM_STR);
    $stmt->bindParam(':jumlah', $data['jumlah'],PDO::PARAM_INT);
    $stmt->bindParam(':harga', $data['harga_satuan'],PDO::PARAM_INT);
    $stmt->bindParam(':kadaluarsa', $data['kadaluarsa'],PDO::PARAM_STR);
    return $stmt->execute();
  }

  // update data
  public function update(array $data){
    $query = "UPDATE barang SET nama_barang = :nama_barang, jumlah = :jumlah, harga_satuan = :harga, expire_date = :kadaluarsa WHERE barang_id = :id";
    $stmt = $this->db->prepare($query);
    $stmt->bindParam(':nama_barang', $data['nama_barang'],PDO::PARAM_STR);
    $stmt->bindParam(':jumlah', $data['jumlah'],PDO::PARAM_INT);
    $stmt->bindParam(':harga', $data['harga_satuan'],PDO::PARAM_INT);
    $stmt->bindParam(':kadaluarsa', $data['kadaluarsa'],PDO::PARAM_STR);
    $stmt->bindParam(':id', $data['id'],PDO::PARAM_INT);
    return $stmt->execute();
  }

  // delete data
  public function delete($id){
    $query = "DELETE FROM barang WHERE barang_id = :id";
    $stmt = $this->db->prepare($query);
    $stmt->bindParam(':id', $id);
    return $stmt->execute();
  }
}