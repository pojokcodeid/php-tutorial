<?php
namespace MyApp\Models;

use MyApp\Core\Database;
use PDO;

class SupplierModel extends Database
{
  public function __construct()
  {
    parent::__construct();
    $this->setTableName('supplier');
    $this->setColumn(['id_supplier', 'nama_supplier', 'email', 'telepon', 'alamat']);
  }

  public function getAll()
  {
    return $this->get()->fetchAll(PDO::FETCH_ASSOC);
  }

  public function insert($data)
  {
    $table = [
      'nama_supplier' => $data['nama_supplier'],
      'email' => $data['email'],
      'telepon' => $data['telepon'],
      'alamat' => $data['alamat'],
    ];
    return $this->insertData($table);
  }

  public function getById($id)
  {
    return $this->get(["id_supplier" => $id])->fetch(PDO::FETCH_ASSOC);
  }

  public function update($data)
  {
    $table = [
      'nama_supplier' => $data['nama_supplier'],
      'email' => $data['email'],
      'telepon' => $data['telepon'],
      'alamat' => $data['alamat'],
    ];
    return $this->updateData($table, ["id_supplier" => $data['id_supplier']]);
  }

  public function delete($id)
  {
    return $this->deleteData(["id_supplier" => $id]);
  }

}