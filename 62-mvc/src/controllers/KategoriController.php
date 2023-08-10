<?php
namespace MyApp\Controllers;

use MyApp\Core\BaseController;

class KategoriController extends BaseController
{
  public function index()
  {
    $data = [
      'title' => 'Kategori',
    ];
    $this->view('template/header', $data);
    $this->view('kategori/index');
    $this->view('template/footer');
  }
}