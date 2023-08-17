<?php
namespace MyApp\Controllers;

use MyApp\Core\BaseController;
use MyApp\Core\Message;

class Lokasi extends BaseController
{

  private $lokasi;
  public function __construct()
  {
    $this->lokasi = $this->model('LokasiModel');
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
    $fields = [
      'kode_lokasi' => 'string | required',
      'nama_lokasi' => 'string | required',
      'keterangan' => 'string',
    ];

    $messages = [
      'kode_lokasi' => [
        'required' => 'Kode lokasi harus diisi',
      ],
      'nama_lokasi' => [
        'required' => 'Nama lokasi harus diisi',
      ]
    ];
    [$inputs, $errors] = $this->filter($_POST, $fields, $messages);
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

}