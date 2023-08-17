<?php
use MyApp\Core\Database;

class BarangModel extends Database
{

  public function __construct()
  {
    parent::__construct();
    $this->setTableName('barang');
    $this->setColumn(['barang_id', 'nama_barang', 'jumlah', 'harga_satuan', 'expire_date']);
  }


  public function getAll()
  {
    return $this->get()->fetchAll();
  }

  public function getById($id)
  {
    return $this->get(['barang_id' => $id])->fetch();
  }

  // insert data
  public function insert(array $data)
  {
    $table = [
      'nama_barang' => $data['nama_barang'],
      'jumlah' => $data['jumlah'],
      'harga_satuan' => $data['harga_satuan'],
      'expire_date' => $data['kadaluarsa']
    ];
    return $this->insertData($table);
  }

  // update data
  public function update(array $data)
  {
    $table = [
      'nama_barang' => $data['nama_barang'],
      'jumlah' => $data['jumlah'],
      'harga_satuan' => $data['harga_satuan'],
      'expire_date' => $data['kadaluarsa']
    ];
    $key = [
      'barang_id' => $data['id']
    ];
    return $this->updateData($table, $key);
  }

  // delete data
  public function delete($id)
  {
    return $this->deleteData(['barang_id' => $id]);
  }
}