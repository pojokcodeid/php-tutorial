<?php

class BarangController extends BaseController
{

  private $barangModel;
  public function __construct()
  {
    $this->barangModel = $this->model('BarangModel');
  }

  public function index()
  {
    $data = [
      'title' => 'Barang',
      'AllBarang' => $this->barangModel->getAll()
    ];
    $this->view('template/header', $data);
    $this->view('barang/index', $data);
    $this->view('template/footer');
  }

  public function insert()
  {
    $data = [
      'title' => 'Barang',
    ];
    $this->view('template/header', $data);
    $this->view('barang/insert');
    $this->view('template/footer');
  }
}