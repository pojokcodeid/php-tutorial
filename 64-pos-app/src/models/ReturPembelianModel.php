<?php
namespace MyApp\Models;

use MyApp\Core\Database;
use MyApp\Helpers\DocNumber;
use PDO;
use PDOException;

class ReturPembelianModel extends Database
{
  public function __construct()
  {
    parent::__construct();
    $this->setTableName('returpembelian');
    $this->setColumn([
      'id_returpembelian',
      'kode_retur',
      'id_pembelian',
      'tanggal',
      'id_user',
      'keterangan'
    ]);
  }

  public function getAll()
  {
    $sql = "select
        r.id_returpembelian,
        r.kode_retur,
        r.tanggal as tgl_retur,
        r.keterangan,
        p.nama_pembelian,
        p.kode_pembelian,
        p.tanggal as tgl_pembelian
      from
        returpembelian r
      inner join pembelian p on
        (r.id_pembelian = p.id_pembelian)";
    return $this->qry($sql)->fetchAll(PDO::FETCH_ASSOC);
  }
  public function getById($id)
  {
    $sql = "select
        r.id_returpembelian,
        r.kode_retur,
        r.tanggal as tgl_retur,
        r.keterangan,
        p.nama_pembelian,
        p.kode_pembelian,
        p.tanggal as tgl_pembelian
      from
        returpembelian r
      inner join pembelian p on
        (r.id_pembelian = p.id_pembelian)
      where r.id_returpembelian = ?";
    return $this->qry($sql, [$id])->fetch(PDO::FETCH_ASSOC);
  }

  public function getDetailRetur($id)
  {
    $sql = "select
        pd.id_returpembelian,
        b.kode_barang,
        b.nama_barang,
        b.harga_beli,
        pd.jumlah,
        pd.keterangan
      from
      returpembelian_dtl pd
      inner join barang b on
        (pd.id_barang = b.id_barang)
      where
        pd.id_returpembelian = ?";
    return $this->qry($sql, [$id])->fetchAll(PDO::FETCH_ASSOC);
  }

  public function insert($data)
  {
    try {
      $pdo = $this->setConnection();
      $pdo->beginTransaction();
      $documentModel = new DocNumber();
      $document = $documentModel->getData('RT');
      $sql = "insert into returpembelian
      (kode_retur,id_pembelian,tanggal,id_user,keterangan)
      values(?, ?, ?, ?, ?)";
      $stmt = $pdo->prepare($sql);
      $stmt->execute([
        $document,
        $data['id_pembelian'],
        $data['tanggal'],
        $data['id_user'],
        $data['keterangan']
      ]);
      $id = $pdo->lastInsertId();
      foreach ($data['detail'] as $row) {
        $sql = "insert into returpembelian_dtl
        (id_returpembelian,id_barang,jumlah,keterangan)
        values(?, ?, ?, ?)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
          $id,
          $row['barang'],
          $row['jumlah'],
          $row['keterangan']
        ]);
        // tambah jumlah barang
        $sql = "update barang set jumlah = jumlah - ? where id_barang = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
          $row['jumlah'],
          $row['barang']
        ]);
      }
      return $pdo->commit();
    } catch (PDOException $e) {
      $pdo->rollBack();
      echo $e->getMessage();
      return null;
    }
  }
}