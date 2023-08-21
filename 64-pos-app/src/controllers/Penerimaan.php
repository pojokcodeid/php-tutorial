<?php
namespace MyApp\Controllers;

use MyApp\Core\BaseController;
use MyApp\Models\PembelianModel;

class Penerimaan extends BaseController
{
  private $penerimaanModel;
  public function __construct()
  {
    $this->penerimaanModel = $this->model('MyApp\Models\PenerimaanModel');
  }

  public function index()
  {
    $data = [
      'judul' => 'Penerimaan Pembelian',
      'penerimaan' => $this->penerimaanModel->getAll()
    ];
    $this->view('template/header', $data);
    $this->view('penerimaan/index', $data);
    $this->view('template/footer');
  }

  public function insert()
  {
    $pembelianDtl = [];
    $pembelian_id = "";
    $pembelianModel = new PembelianModel();
    if (isset($_POST['pembelian'])) {
      $pembelianDtl = $pembelianModel->getPembelianDtl($_POST['pembelian']);
      $pembelian_id = $_POST['pembelian'];
    }
    $data = [
      'judul' => 'Tambah Data Penerimaan',
      'pembelianData' => $pembelianModel->getByStatus(0),
      'pembelianDtl' => $pembelianDtl,
      'pembelian_id' => $pembelian_id
    ];
    $this->view('template/header', $data);
    $this->view('penerimaan/insert', $data);
    $this->view('template/footer');
  }

  public function insert_data()
  {
    $pembelianDtl = [];
    $pembelian_id = "";
    $pembelianModel = new PembelianModel();
    if (isset($_POST['pembelian'])) {
      $pembelianDtl = $pembelianModel->getPembelianDtl($_POST['pembelian']);
      $pembelian_id = $_POST['pembelian'];
    }
    $arrayDtl = [];
    foreach ($pembelianDtl as $row) {
      $data = [
        "barang" => $row['id_barang'],
        "jumlah" => intval($_POST['barang'][$row['id_pembeliandtl']]),
        "keterangan" => strval($_POST['keterangan'][$row['id_pembeliandtl']])
      ];
      array_push($arrayDtl, $data);
    }
    $penerimaan = [
      "id_pembelian" => $pembelian_id,
      "tanggal" => date("Y-m-d"),
      "id_user" => 1,
      "keterangan" => strval($_POST['ket']),
      "detail" => $arrayDtl,
    ];

    echo '<pre>';
    var_dump($penerimaan);
    echo '</pre>';
  }
}