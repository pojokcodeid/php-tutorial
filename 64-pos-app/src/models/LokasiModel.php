<?php
namespace MyApp\Models;

use MyApp\Core\Database;
use PDO;

class LokasiModel extends Database
{
  public function __construct()
  {
    parent::__construct();
    $this->setTableName('lokasi');
    $this->setColumn(['id_lokasi', 'kode_lokasi', 'nama_lokasi', 'keterangan']);
  }

  public function getAll()
  {
    return $this->get()->fetchAll(PDO::FETCH_ASSOC);
  }

  public function insert($data)
  {
    $table = [
      'kode_lokasi' => $data['kode_lokasi'],
      'nama_lokasi' => $data['nama_lokasi'],
      'keterangan' => $data['keterangan'],
    ];
    return $this->insertData($table);
  }

  public function getById($id)
  {
    return $this->get(['id_lokasi' => $id])->fetch(PDO::FETCH_ASSOC);
  }

  public function edit($data)
  {
    $table = [
      'id_lokasi' => $data['id_lokasi'],
      'kode_lokasi' => $data['kode_lokasi'],
      'nama_lokasi' => $data['nama_lokasi'],
      'keterangan' => $data['keterangan'],
    ];
    return $this->updateData($table);
  }

  public function delete($id)
  {
    return $this->deleteData(['id_lokasi' => $id]);
  }
}