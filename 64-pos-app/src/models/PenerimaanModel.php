<?php
namespace MyApp\Models;

use MyApp\Core\Database;
use PDO;

class PenerimaanModel extends Database
{
  public function __construct()
  {
    parent::__construct();
    $this->setTableName('penerimaan');
    $this->setColumn([
      'id_penerimaan',
      'id_pembelian',
      'tanggal',
      'id_user',
      'keterangan'
    ]);
  }

  public function getAll()
  {
    $sql = "
    SELECT b.kode_pembelian,b.tanggal as tgl_pembelian,p.tanggal tgl_penerimaan, 
    p.keterangan FROM `penerimaan` p inner join pembelian b on(p.id_pembelian=b.id_pembelian)
    ";
    return $this->qry($sql)->fetchAll(PDO::FETCH_ASSOC);
  }
}