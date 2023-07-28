<?php 

class BarangController extends BaseController{

  public function index(){
    $data=[
      'title' => 'Barang',
    ];
    $this->view('template/header', $data);
    $this->view('barang/index');
    $this->view('template/footer');
  }

  public function edit($id1=0, $id2=""){
    echo 'Edit from barang id1 = '.$id1.' dan id2 = '.$id2;
  }
}