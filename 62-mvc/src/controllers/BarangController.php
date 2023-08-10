<?php
namespace MyApp\Controllers;

use MyApp\Core\BaseController;
use MyApp\Core\Message;

class BarangController extends BaseController
{

  private $barangModel;
  public function __construct()
  {
    $this->barangModel = $this->model('MyApp\Models\BarangModel');
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
      'nama_barang' => 'string | required',
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

  public function edit($id)
  {
    $data = [
      'title' => 'Barang',
      'barang' => $this->barangModel->getById($id)
    ];
    $this->view('template/header', $data);
    $this->view('barang/edit', $data);
    $this->view('template/footer');
  }

  public function edit_barang()
  {
    $fields = [
      'nama_barang' => 'string | required',
      'jumlah' => 'int | required',
      'harga_satuan' => 'float | required',
      'kadaluarsa' => 'string',
      'mode' => 'string',
      'id' => 'int',
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
      $this->redirect('barang/edit/' . $inputs['id']);
    }

    if ($inputs['mode'] == 'update') {
      $proc = $this->barangModel->update($inputs);
      if ($proc) {
        Message::setFlash('success', 'Berhasil !', 'Barang berhasil diubah');
        $this->redirect('barang');
      }
    } else {
      $proc = $this->barangModel->delete($inputs['id']);
      if ($proc) {
        Message::setFlash('success', 'Berhasil !', 'Barang berhasil dihapus');
        $this->redirect('barang');
      }
    }
  }
}