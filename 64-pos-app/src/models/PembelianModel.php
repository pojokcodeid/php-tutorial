<?php
namespace MyApp\Models;

use MyApp\Core\Database;
use PDO;

class PembelianModel extends Database
{

  public function __construct()
  {
    parent::__construct();
    $this->setTableName('pembelian');
    $this->setColumn([
      'id_pembelian',
      'nama_pembelian',
      'tanggal',
      'total',
      'status',
      'id_supplier',
      'id_user',
      'keterangan',
    ]);
  }

  public function getAll()
  {
    return $this->get()->fetchAll(PDO::FETCH_ASSOC);
  }
}