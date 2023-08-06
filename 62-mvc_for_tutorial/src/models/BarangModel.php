<?php

class BarangModel extends Database
{
  public function __construct()
  {
    parent::__construct();
  }

  public function getAll()
  {
    $query = "SELECT * FROM barang";
    return $this->qry($query)->fetchAll();
  }

  public function insert($data)
  {
    $query = "INSERT INTO barang 
    (nama_barang, jumlah, harga_satuan, expire_date) 
    VALUES (?, ?, ?, ?)";
    return $this->qry($query, [
      $data['nama_barang'],
      $data['jumlah'],
      $data['harga_satuan'],
      $data['kadaluarsa']
    ]);
  }

  public function getById($id)
  {
    $query = "SELECT * FROM barang WHERE barang_id = ?";
    return $this->qry($query, [$id])->fetch();
  }

  public function update($data)
  {
    $query = "UPDATE barang SET nama_barang = ?, jumlah = ?, harga_satuan = ?, expire_date = ? WHERE barang_id = ?";
    return $this->qry($query, [
      $data['nama_barang'],
      $data['jumlah'],
      $data['harga_satuan'],
      $data['kadaluarsa'],
      $data['id']
    ]);
  }

  public function delete($id)
  {
    $query = "DELETE FROM barang WHERE barang_id = ?";
    return $this->qry($query, [$id]);
  }
}