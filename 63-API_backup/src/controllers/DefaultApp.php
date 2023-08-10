<?php

class DefaultApp extends BaseController
{

  public function index()
  {
    $data = [
      'status' => '404',
      'error' => '404',
      'message' => 'Halaman tidak ditemukan',
      'data' => null
    ];
    $this->view('template/header');
    header('HTTP/1.1 404 Not Found');
    echo json_encode($data);
  }
}