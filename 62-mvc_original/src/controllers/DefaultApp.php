<?php
use MyApp\Core\BaseController;

class DefaultApp extends BaseController
{

  public function index()
  {
    $data = [
      'judul' => 'Home',
    ];
    $this->view('template/header', $data);
    $this->view('home/index', $data);
    $this->view('template/footer');
  }
}