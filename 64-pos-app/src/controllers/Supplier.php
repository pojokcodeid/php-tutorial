<?php
namespace MyApp\Controllers;

use MyApp\Core\BaseController;

class Supplier extends BaseController
{

  private $supplierModel;
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
}