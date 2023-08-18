<?php
namespace MyApp\Controllers;

use MyApp\Core\BaseController;
use MyApp\Core\Message;

class Supplier extends BaseController
{

  private $supplierModel;
  private const FIELDS = [
    'nama_supplier' => 'string | required',
    'email' => 'string',
    'telepon' => 'string',
    'alamat' => 'string | required',
    'id_supplier' => 'int',
    'mode' => 'string'
  ];
  private const MESSAGES = [
    'nama_supplier' => [
      'required' => 'Nama supplier harus diisi',
    ],
    'alamat' => [
      'required' => 'Alamat harus diisi',
    ]
  ];
  public function __construct()
  {
    $this->supplierModel = $this->model('MyApp\Models\SupplierModel');
  }

  public function index()
  {
    $allSupplier = $this->supplierModel->getAll();
    $data = [
      'judul' => 'Supplier',
      'allSupplier' => $allSupplier
    ];
    $this->view('template/header', $data);
    $this->view('supplier/index', $data);
    $this->view('template/footer');
  }

  public function insert()
  {
    $data = [
      'judul' => 'Insert Supplier',
    ];
    $this->view('template/header', $data);
    $this->view('supplier/insert');
    $this->view('template/footer');
  }

  public function insert_supplier()
  {
    [$inputs, $errors] = $this->filter($_POST, self::FIELDS, self::MESSAGES);
    if ($errors) {
      Message::setFlash('error', 'Gagal !', $errors[0], $inputs);
      $this->redirect('/supplier/insert');
    }
    $proc = $this->supplierModel->insert($inputs);
    if ($proc) {
      Message::setFlash('success', 'Berhasil !', 'Supplier berhasil ditambahkan');
      $this->redirect('/supplier');
    } else {
      Message::setFlash('error', 'Gagal !', 'Supplier gagal ditambahkan');
      $this->redirect('/supplier/insert');
    }
  }

  public function edit($id)
  {
    $data = [
      'judul' => 'Edit Supplier',
      'data' => $this->supplierModel->getById($id)
    ];
    $this->view('template/header', $data);
    $this->view('supplier/edit', $data);
    $this->view('template/footer');
  }

  public function edit_supplier()
  {
    [$inputs, $errors] = $this->filter($_POST, self::FIELDS, self::MESSAGES);
    if ($errors) {
      Message::setFlash('error', 'Gagal !', $errors[0], $inputs);
      $this->redirect('/supplier');
    }
    if ($inputs['mode'] == "update") {
      $proc = $this->supplierModel->update($inputs);
      if ($proc) {
        Message::setFlash('success', 'Berhasil !', 'Supplier berhasil diubah');
        $this->redirect('/supplier');
      } else {
        Message::setFlash('error', 'Gagal !', 'Supplier gagal diubah');
        $this->redirect('/supplier');
      }
    } else {
      $proc = $this->supplierModel->delete($inputs['id_supplier']);
      if ($proc) {
        Message::setFlash('success', 'Berhasil !', 'Supplier berhasil dihapus');
        $this->redirect('/supplier');
      } else {
        Message::setFlash('error', 'Gagal !', 'Supplier gagal dihapus');
        $this->redirect('/supplier');
      }
    }
  }
}