<?php
namespace MyApp\Models;

use MyApp\Core\Database;
use MyApp\Helpers\DocNumber;
use PDO;
use PDOException;

class PembelianModel extends Database
{

  public function __construct()
  {
    parent::__construct();
    $this->setTableName('pembelian');
    $this->setColumn([
      'id_pembelian',
      'kode_pembelian',
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

  public function getByStatus($status)
  {
    return $this->get(['status' => $status])->fetchAll(PDO::FETCH_ASSOC);
  }

  public function getPembelianDtl($id)
  {
    $sql = "select
      pd.id_pembeliandtl,
      b.id_barang,
      b.kode_barang,
      b.nama_barang,
      pd.jumlah,
      pd.harga_satuan
    from
      pembelian_dtl pd
    inner join barang b 
    on
      (pd.id_barang = b.id_barang)
    where
      id_pembelian = ?";
    return $this->qry($sql, [$id])->fetchAll(PDO::FETCH_ASSOC);
  }

  public function insert($data)
  {
    try {
      $pdo = $this->setConnection();
      $pdo->beginTransaction();
      // masukan transaksi
      $documentModel = new DocNumber();
      $document = $documentModel->getData('PO');
      $sqlTrans = "insert into pembelian(kode_pembelian, nama_pembelian, tanggal, id_supplier, id_user, keterangan, total, status)
      values(?, ?, ?, ?, ?, ?, ?, ?)";
      $stmt = $pdo->prepare($sqlTrans);
      $stmt->execute([
        $document,
        $_SESSION['pembelian']['nama_pembelian'],
        $_SESSION['pembelian']['tanggal'],
        $_SESSION['pembelian']['supplier'],
        1, #nanti harus diisi dengan session user
        $_SESSION['pembelian']['keterangan'],
        $_SESSION['pembelian']['total'],
        0 # 0 artinya masih new belum ada penerimaan barang
      ]);
      $id = $pdo->lastInsertId();
      foreach ($_SESSION['pembelian']['detail'] as $key => $value) {
        $stmt = $pdo->prepare("insert into pembelian_dtl(id_pembelian, id_barang, jumlah, harga_satuan) values(?, ?, ?, ?)");
        $stmt->execute([
          $id,
          $value['id_barang'],
          $value['jumlah'],
          $value['harga']
        ]);
        // menambah stok dari menu penerimaan barang
      }
      return $pdo->commit();
    } catch (PDOException $e) {
      $pdo->rollBack();
      echo $e->getMessage();
      return null;
    }
  }
}