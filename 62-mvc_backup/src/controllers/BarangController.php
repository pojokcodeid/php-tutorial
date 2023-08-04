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

  public function insert_barang()
  {
    $fields = [
      'nama_barang' => 'string | required | alphanumeric',
      'jumlah' => 'int | required',
      'harga_satuan' => 'float | required',
      'kadaluarsa' => 'string'
    ];
    $message = [
      'nama_barang' => [
        'required' => 'Nama Barang harus diisi!',
        'alphanumeric' => 'Masukan huruf dan angka',
        'between' => 'Nama Barang harus diantara 3 dan 25 karakter',
      ],
      'jumlah' => [
        'required' => 'Jumlah harus diisi!',
      ],
      'harga_satuan' => [
        'required' => 'Harga Satuan harus diisi!',
      ]
    ];
    [$inputs, $errors] = $this->filter($_POST, $fields, $message);

    if ($inputs['kadaluarsa'] == "") {
      $inputs['kadaluarsa'] = "0000-00-00";
    }

    if ($errors) {
      Message::setFlash('error', 'Gagal !', $errors[0], $inputs);
      $this->redirect('barang/insert');
    }

    $proc = $this->barangModel->insert($inputs);
    if ($proc) {
      Message::setFlash('success', 'Berhasil !', 'Barang berhasil ditambahkan');
      $this->redirect('barang');
    }
  }
}