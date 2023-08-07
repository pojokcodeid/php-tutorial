<?php
use MyApp\Core\BaseController;

class SettingController extends BaseController
{
  public function index()
  {
    $data = [
      'judul' => 'Setting',
    ];
    $this->view('template/header', $data);
    $this->view('setting/index');
    $this->view('template/footer');
  }
}