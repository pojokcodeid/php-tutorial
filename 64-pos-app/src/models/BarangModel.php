<?php
namespace MyApp\Models;

use MyApp\Core\Database;
use PDO;

class BarangModel extends Database
{

  public function __construct()
  {
    parent::__construct();
    $this->setTableName('barang');
    $this->setColumn([
      'id_barang',
      'barcode',
      'nama_barang',
      'jumlah',
      'harga_beli',
      'harga_jual',
      'tgl_kadaluarsa',
      'id_supplier',
      'id_kategori',
      'id_lokasi',
      'tgl_dibuat',
      'tgl_diubah',
    ]);
  }


  public function getAll()
  {
    return $this->get()->fetchAll();
  }

  public function getById($id)
  {
    return $this->get(['id_barang' => $id])->fetch(PDO::FETCH_ASSOC);
  }

  // insert data
  public function insert(array $data)
  {
    $table = [
      'nama_barang' => $data['nama_barang'],
      'jumlah' => $data['jumlah'],
      'harga_beli' => $data['harga_beli'],
      'harga_jual' => $data['harga_jual'],
      'tgl_kadaluarsa' => $data['kadaluarsa'],
      'id_supplier' => $data['supplier'],
      'id_kategori' => $data['kategori'],
      'id_lokasi' => $data['lokasi'],
      'tgl_dibuat' => date('Y-m-d'),
      'tgl_diubah' => date('Y-m-d')
    ];
    return $this->insertData($table);
  }

  // update data
  public function update(array $data)
  {
    $table = [
      'nama_barang' => $data['nama_barang'],
      'jumlah' => $data['jumlah'],
      'harga_beli' => $data['harga_beli'],
      'harga_jual' => $data['harga_jual'],
      'tgl_kadaluarsa' => $data['kadaluarsa'],
      'id_supplier' => $data['supplier'],
      'id_kategori' => $data['kategori'],
      'id_lokasi' => $data['lokasi'],
      'tgl_diubah' => date('Y-m-d')
    ];
    $key = [
      'id_barang' => $data['id']
    ];
    return $this->updateData($table, $key);
  }

  // delete data
  public function delete($id)
  {
    return $this->deleteData(['id_barang' => $id]);
  }
}