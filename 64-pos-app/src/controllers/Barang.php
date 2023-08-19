<?php
namespace MyApp\Controllers;

use MyApp\Core\BaseController;
use MyApp\Core\Message;
use MyApp\Models\KategoriModel;
use MyApp\Models\LokasiModel;
use MyApp\Models\SupplierModel;


class Barang extends BaseController
{

  private $barang;
  private const FIELDS = [
    'nama_barang' => 'string | required',
    'jumlah' => 'int | required',
    'harga_beli' => 'float | required',
    'harga_jual' => 'float | required',
    'kadaluarsa' => 'string',
    'supplier' => 'string | required',
    'kategori' => 'string | required',
    'lokasi' => 'string | required',
    'id' => 'int',
    'mode' => 'string'
  ];

  private const MESSAGES = [
    'nama_barang' => [
      'required' => 'Nama barang harus diisi',
      'alphanumeric' => 'Masukan Huruf dan angka saja',
    ],
    'jumlah' => [
      'required' => 'Jumlah barang harus diisi',
    ],
    'harga_beli' => [
      'required' => 'Harga beli barang harus diisi',
    ],
    'harga_jual' => [
      'required' => 'Harga jual barang harus diisi',
    ],
    'supplier' => [
      'required' => 'Supplier harus dipilih',
    ],
    'kategori' => [
      'required' => 'Kategori harus dipilih',
    ],
    'lokasi' => [
      'required' => 'Lokasi harus dipilih',
    ]
  ];

  public function __construct()
  {
    $this->barang = $this->model('MyApp\Models\BarangModel');
  }

  public function index()
  {
    $allBarang = $this->barang->getAll();
    $data = [
      'judul' => 'Home',
      'allBarang' => $allBarang
    ];
    $this->view('template/header', $data);
    $this->view('barang/index', $data);
    $this->view('template/footer');
  }

  public function insert()
  {
    $kategori = new KategoriModel();
    $lokasi = new LokasiModel();
    $supplier = new SupplierModel();
    $data = [
      'judul' => 'Insert Barang',
      'kategori' => $kategori->getAll(),
      'lokasi' => $lokasi->getAll(),
      'supplier' => $supplier->getAll()
    ];
    $this->view('template/header', $data);
    $this->view('barang/insert', $data);
    $this->view('template/footer');
  }

  public function edit($id)
  {
    $kategori = new KategoriModel();
    $lokasi = new LokasiModel();
    $supplier = new SupplierModel();
    $data = [
      'judul' => 'Edit Barang',
      'data' => $this->barang->getById($id),
      'kategori' => $kategori->getAll(),
      'lokasi' => $lokasi->getAll(),
      'supplier' => $supplier->getAll()
    ];
    $this->view('template/header', $data);
    $this->view('barang/edit', $data);
    $this->view('template/footer');
  }

  public function insert_barang()
  {
    [$inputs, $errors] = $this->filter($_POST, self::FIELDS, self::MESSAGES);
    if ($inputs['kadaluarsa'] == "") {
      $inputs['kadaluarsa'] = "0000-00-00";
    }

    if ($errors) {
      Message::setFlash('error', 'Gagal !', $errors[0], $inputs);
      $this->redirect('barang/insert');
    }

    $proc = $this->barang->insert($inputs);
    if ($proc) {
      Message::setFlash('success', 'Berhasil !', 'Data Berhasil Disimpan');
      $this->redirect('barang');
    }
  }

  public function edit_barang()
  {

    [$inputs, $errors] = $this->filter($_POST, self::FIELDS, self::MESSAGES);
    if ($inputs['kadaluarsa'] == "") {
      $inputs['kadaluarsa'] = "0000-00-00";
    }

    if ($errors) {
      Message::setFlash('error', 'Gagal !', $errors[0], $inputs);
      $this->redirect('barang/edit/' . $inputs['id']);
    }

    if ($inputs['mode'] == "update") {
      $updated = $this->barang->update($inputs);
      if ($updated) {
        Message::setFlash('success', 'Berhasil !', 'Data Berhasil Diubah');
        $this->redirect('barang');
      }
    } else if ($inputs['mode'] == "delete") {
      $deleted = $this->barang->delete($inputs['id']);
      if ($deleted) {
        Message::setFlash('success', 'Berhasil !', 'Data Berhasil Dihapus');
        $this->redirect('barang');
      }
    }

  }
}