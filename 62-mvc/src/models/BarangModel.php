<?php

class BarangModel extends Database
{

  public function __construct()
  {
    parent::__construct();
    $this->setTableName('barang');
    $this->setColumn(['barang_id','nama_barang', 'jumlah', 'harga_satuan', 'expire_date']);
  }


  public function getAll()
  {
    // return $this->get(['barang_id'=>1,'nama_barang'=>'Sarung'])->fetchAll();
    return $this->get()->fetchAll();
  }

  public function getById($id)
  {
    // $query = "SELECT * FROM barang WHERE barang_id = ?";
    // return $this->qry($query, [$id])->fetch();
    return $this->get(['barang_id'=>$id])->fetch();
  }

  // insert data
  public function insert(array $data)
  {
    // -- ini contoh dengan query custom --
    // $query = "
    // INSERT INTO barang (
    //   nama_barang, 
    //   jumlah, 
    //   harga_satuan, 
    //   expire_date) 
    // VALUES (?, ?, ?, ?)";
    // return $this->qry($query, [
    //   $data['nama_barang'], $data['jumlah'],
    //   $data['harga_satuan'], $data['kadaluarsa']
    // ]);
    $table=[
      'nama_barang'=>$data['nama_barang'],
      'jumlah'=>$data['jumlah'],
      'harga_satuan'=>$data['harga_satuan'],
      'expire_date'=>$data['kadaluarsa']
    ];
    return $this->insertData($table);
  }

  // update data
  public function update(array $data)
  {
    // -- ini contoh dengan query custom --
    // $query = "UPDATE barang SET 
    //   nama_barang = ?, 
    //   jumlah = ?, 
    //   harga_satuan = ?, 
    //   expire_date = ? 
    //   WHERE barang_id = ?";
    // return $this->qry($query, [
    //   $data['nama_barang'], $data['jumlah'],
    //   $data['harga_satuan'], $data['kadaluarsa'], $data['id']
    // ]);
    $table=[
      'nama_barang'=>$data['nama_barang'],
      'jumlah'=>$data['jumlah'],
      'harga_satuan'=>$data['harga_satuan'],
      'expire_date'=>$data['kadaluarsa']
    ];
    $key=[
      'barang_id'=>$data['id']
    ];
    return $this->updateData($table,$key);
  }

  // delete data
  public function delete($id)
  {
    // $query = "DELETE FROM barang WHERE barang_id = ?";
    // return $this->qry($query, [$id]);
    return $this->deleteData(['barang_id'=>$id]);
  }
}