<?php
namespace MyApp\Controllers;

use Mpdf\Mpdf;
use MyApp\Core\BaseController;
use MyApp\Core\Message;
use MyApp\Models\PembelianModel;

class ReturPembelian extends BaseController
{

  private $returPembelian;
  public function __construct()
  {
    $this->returPembelian = $this->model('MyApp\Models\ReturPembelianModel');
  }

  public function index()
  {
    $data = [
      'judul' => 'Retur Pembelian',
      'returPembelian' => $this->returPembelian->getAll()
    ];
    $this->view('template/header', $data);
    $this->view('returPembelian/index', $data);
    $this->view('template/footer');
  }

  public function insert()
  {
    $pembelian_id = "";
    $pembelianDtl = [];
    $pembelianModel = new PembelianModel();
    if (isset($_POST['pembelian'])) {
      $pembelianDtl = $pembelianModel->getPembelianDtl($_POST['pembelian']);
      $pembelian_id = $_POST['pembelian'];
    }
    $data = [
      'judul' => 'Tambah Data Retur Pembelian',
      'pembelianData' => $pembelianModel->getByStatus(1),
      'pembelian_id' => $pembelian_id,
      'pembelianDtl' => $pembelianDtl
    ];
    $this->view('template/header', $data);
    $this->view('returPembelian/insert', $data);
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
      $jumlah = intval($_POST['barang'][$row['id_pembeliandtl']]);
      if ($jumlah > 0) {
        $data = [
          "barang" => $row['id_barang'],
          "jumlah" => $jumlah,
          "keterangan" => strval($_POST['keterangan'][$row['id_pembeliandtl']])
        ];
        array_push($arrayDtl, $data);
      }
    }
    $penerimaan = [
      "id_pembelian" => $pembelian_id,
      "tanggal" => date("Y-m-d"),
      "id_user" => 1,
      "keterangan" => strval($_POST['ket']),
      "detail" => $arrayDtl,
    ];

    $hasil = $this->returPembelian->insert($penerimaan);
    if ($hasil) {
      Message::setFlash('success', 'Berhasil !', "Data berhasil disimpan");
      $this->redirect('retur-pembelian');
    } else {
      Message::setFlash('danger', 'Gagal !', "Data gagal disimpan");
      $this->redirect('retur-pembelian/insert');
    }
  }

  public function printRetur($id)
  {
    $penerimaan = $this->returPembelian->getById($id);
    $penerimaanDtl = $this->returPembelian->getDetailRetur($id);
    $mpdf = new Mpdf();
    $data = [
      'detail' => 1,
      'penerimaan' => $penerimaan,
      'penerimaanDtl' => $penerimaanDtl
    ];
    $html = $this->view('returPembelian/print', $data, true);
    $mpdf->WriteHTML($html);
    $mpdf->Output('SlipPenerimaan.pdf', "I");
  }
}