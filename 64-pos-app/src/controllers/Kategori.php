<?php
use MyApp\Core\BaseController;

class Kategori extends BaseController
{

  private $kategoriModel;

  public function __construct()
  {
    $this->kategoriModel = $this->model('KategoriModel');
  }
  public function index()
  {
    $getAll = $this->kategoriModel->getAll();
    $data = [
      'judul' => 'Barang Kategori',
      'allKategori' => $getAll
    ];
    $this->view('template/header', $data);
    $this->view('kategori/index', $data);
    $this->view('template/footer');
  }

  public function insert()
  {
    $data = [
      'judul' => 'Tambah Kategori'
    ];
    $this->view('template/header', $data);
    $this->view('kategori/insert');
    $this->view('template/footer');
  }
}