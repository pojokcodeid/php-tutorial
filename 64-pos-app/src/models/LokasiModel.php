<?php
use MyApp\Core\Database;

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
}