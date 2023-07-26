<?php 

class BarangController{

  public function index(){
    echo 'Hello World from Barang index';
  }

  public function edit($id1=0, $id2=""){
    echo 'Edit from barang id1 = '.$id1.' dan id2 = '.$id2;
  }
}