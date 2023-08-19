<?php
namespace MyApp\Controllers;

use MyApp\Core\BaseController;
use MyApp\Helpers\DocNumber;

class Pembelian extends BaseController
{

  private $pembelianModel;

  public function __construct()
  {
    $this->pembelianModel = $this->model('MyApp\Models\PembelianModel');
  }

  public function index()
  {
    $getAll = $this->pembelianModel->getAll();
    $data = [
      'judul' => 'Barang Kategori',
      'pembelian' => $getAll
    ];
    $this->view('template/header', $data);
    $this->view('pembelian/index', $data);
    $this->view('template/footer');
  }

  public function insert()
  {
    $docNo = new DocNumber();
    $doc = $docNo->getData('PO');
    $data = [
      'judul' => 'Tambah Pembelian',
      'documentNumber' => $doc
    ];
    $this->view('template/header', $data);
    $this->view('pembelian/insert', $data);
    $this->view('template/footer');

  }

}