<?php

class BarangModel
{
  private $conn;

  public function __construct()
  {
    $this->conn = Connection::getConnection();
  }

  public function getAll()
  {
    $query = "SELECT * FROM barang";
    $stmt = $this->conn->query($query);
    $stmt->fetch_assoc();
    return $stmt;
  }
  // getbyId
  public function getById($id)
  {
    $query = "SELECT * FROM barang WHERE barang_id = ?";
    $stmt = $this->conn->prepare($query);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    return $result->fetch_assoc();
  }
  // insert data
  public function insert(array $data)
  {
    $sql = "insert into barang (nama_barang, jumlah, harga_satuan, expire_date) values(?, ?, ?, ?)";
    $stmt = $this->conn->prepare($sql);
    // s=string, i= integer, d=double, b=blob
    $stmt->bind_param("sids", $data['nama_barang'], $data['jumlah'], $data['harga_satuan'], $data['kadaluarsa']);
    return $stmt->execute();
  }
  // update
  public function update(array $data)
  {
    $sql = "UPDATE barang SET nama_barang = ?, jumlah = ?, harga_satuan = ?, expire_date = ? WHERE barang_id = ?";
    $stmt = $this->conn->prepare($sql);
    $stmt->bind_param("sidsi", $data['nama_barang'], $data['jumlah'], $data['harga_satuan'], $data['kadaluarsa'], $data['barang_id']);
    return $stmt->execute();
  }

  // delete
  public function delete(array $data)
  {
    $sql = "DELETE FROM barang WHERE barang_id = ?";
    $stmt = $this->conn->prepare($sql);
    $stmt->bind_param("i", $data['barang_id']);
    return $stmt->execute();
  }
}