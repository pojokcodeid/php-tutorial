<?php

class DefaultApp extends BaseController
{

  public function index()
  {
    $data = [
      'status' => 'Error',
      'message' => 'Halaman tidak ditemukan'
    ];
    $this->view('template/header');
    header('HTTP/1.1 404 Not Found');
    echo json_encode($data);
  }
}