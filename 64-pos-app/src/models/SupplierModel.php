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

}