<?php
namespace MyApp\Controllers;

use MyApp\Core\BaseController;
use MyApp\Core\Message;

class Lokasi extends BaseController
{

  private $lokasi;
  private const FIELDS = [
    'kode_lokasi' => 'string | required',
    'nama_lokasi' => 'string | required',
    'keterangan' => 'string',
    'id_lokasi' => 'int',
    'mode' => 'string'
  ];
  private const MESSAGES = [
    'kode_lokasi' => [
      'required' => 'Kode lokasi harus diisi',
    ],
    'nama_lokasi' => [
      'required' => 'Nama lokasi harus diisi',
    ]
  ];
  public function __construct()
  {
    $this->lokasi = $this->model('MyApp\Models\LokasiModel');
  }

  public function index()
  {
    $allLokasi = $this->lokasi->getAll();
    $data = [
      'judul' => 'Lokasi Barang',
      'allLokasi' => $allLokasi
    ];
    $this->view('template/header', $data);
    $this->view('lokasi/index', $data);
    $this->view('template/footer');
  }

  public function insert()
  {
    $data = [
      'judul' => 'Tambah Lokasi',
    ];
    $this->view('template/header', $data);
    $this->view('lokasi/insert');
    $this->view('template/footer');
  }

  public function insert_lokasi()
  {
    [$inputs, $errors] = $this->filter($_POST, self::FIELDS, self::MESSAGES);
    if ($errors) {
      Message::setFlash('error', 'Gagal !', $errors[0], $inputs);
      $this->redirect('/lokasi/insert');
    }

    $proc = $this->lokasi->insert($inputs);
    if ($proc) {
      Message::setFlash('success', 'Berhasil !', 'Data Berhasil Disimpan');
      $this->redirect('lokasi');
    }
  }

  public function edit($id)
  {
    $data = [
      'judul' => 'Edit Lokasi',
      'data' => $this->lokasi->getById($id)
    ];
    $this->view('template/header', $data);
    $this->view('lokasi/edit', $data);
    $this->view('template/footer');
  }

  public function edit_lokasi()
  {
    [$inputs, $errors] = $this->filter($_POST, self::FIELDS, self::MESSAGES);
    if ($errors) {
      Message::setFlash('error', 'Gagal !', $errors[0], $inputs);
      $this->redirect('/lokasi/' . $inputs['id_lokasi']);
    }
    if ($inputs['mode'] == "update") {
      $proc = $this->lokasi->edit($inputs);
      if ($proc) {
        Message::setFlash('success', 'Berhasil !', 'Data Berhasil Diubah');
        $this->redirect('lokasi');
      } else {
        Message::setFlash('error', 'Gagal !', 'Data Gagal Diubah');
        $this->redirect('/lokasi/' . $inputs['id_lokasi']);
      }
    } else {
      $proc = $this->lokasi->delete($inputs['id_lokasi']);
      if ($proc) {
        Message::setFlash('success', 'Berhasil !', 'Data Berhasil Dihapus');
        $this->redirect('lokasi');
      } else {
        Message::setFlash('error', 'Gagal !', 'Data Gagal Dihapus');
        $this->redirect('/lokasi/' . $inputs['id_lokasi']);
      }
    }
  }

}