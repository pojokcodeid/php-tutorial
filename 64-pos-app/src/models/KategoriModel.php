<?php
namespace MyApp\Models;

use MyApp\Core\Database;
use PDO;

class KategoriModel extends Database
{
  public function __construct()
  {
    parent::__construct();
    $this->setTableName('kategori');
    $this->setColumn(['id_kategori', 'nama_kategori']);
  }

  public function getAll()
  {
    return $this->get()->fetchAll(PDO::FETCH_ASSOC);
  }

  public function insert($data)
  {
    $table = [
      'nama_kategori' => $data['nama_kategori']
    ];
    return $this->insertData($table);
  }

  public function getById($id)
  {
    return $this->get(['id_kategori' => $id])->fetch(PDO::FETCH_ASSOC);
  }

  public function update($data)
  {
    $table = [
      'nama_kategori' => $data['nama_kategori']
    ];
    return $this->updateData($table, ['id_kategori' => $data['id_kategori']]);
  }

  public function delete($id)
  {
    return $this->deleteData(['id_kategori' => $id]);
  }
}