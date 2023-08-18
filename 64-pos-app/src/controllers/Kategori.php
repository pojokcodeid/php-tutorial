<?php
namespace MyApp\Controllers;

use MyApp\Core\BaseController;
use MyApp\Core\Message;

class Kategori extends BaseController
{

  private $kategoriModel;
  private const FIELDS = [
    'nama_kategori' => 'string | required',
    'id_kategori' => 'int',
    'mode' => 'string'
  ];
  private const MESSAGES = [
    'nama_kategori' => [
      'required' => 'Nama kategori harus diisi',
    ]
  ];

  public function __construct()
  {
    $this->kategoriModel = $this->model('MyApp\Models\KategoriModel');
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

  public function insert_kategori()
  {
    [$inputs, $errors] = $this->filter($_POST, self::FIELDS, self::MESSAGES);
    if ($errors) {
      Message::setFlash('error', 'Gagal !', $errors[0], $inputs);
      $this->redirect('kategori/insert');
    }
    $proc = $this->kategoriModel->insert($inputs);
    if ($proc) {
      Message::setFlash('success', 'Berhasil !', 'Data Berhasil Disimpan');
      $this->redirect('kategori');
    }
  }

  public function edit($id)
  {
    $data = [
      'judul' => 'Edit Kategori',
      'data' => $this->kategoriModel->getById($id)
    ];
    $this->view('template/header', $data);
    $this->view('kategori/edit', $data);
    $this->view('template/footer');
  }

  public function edit_kategori()
  {
    [$inputs, $errors] = $this->filter($_POST, self::FIELDS, self::MESSAGES);
    if ($errors && $inputs['mode'] != 'delete') {
      Message::setFlash('error', 'Gagal !', $errors[0], $inputs);
      $this->redirect('kategori/' . $inputs['id_kategori']);
    }

    $alert = "";
    if ($inputs['mode'] == 'delete') {
      $proc = $this->kategoriModel->delete($inputs['id_kategori']);
      $alert = "Data Berhasil Dihapus";
    } else {
      $proc = $this->kategoriModel->update($inputs);
      $alert = "Data Berhasil Diupdate";
    }
    if ($proc) {
      Message::setFlash('success', 'Berhasil !', $alert);
      $this->redirect('kategori');
    } else {
      Message::setFlash('error', 'Gagal !', 'Perubahan gagal');
      $this->redirect('kategori/' . $inputs['id_kategori']);
    }
  }
}