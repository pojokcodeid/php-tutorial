<?php 

class Routes{
  public function run(){
    $router=new App();
    $router->setDefaultController('DefaultApp');
    $router->setDefaultMethod('index');

    $router->get('/barang',['BarangController','index']);
    $router->get('/barang/index',['BarangController','index']);
    $router->get('/barang/insert',['BarangController','insert']);
    $router->get('/barang/edit',['BarangController','edit']);
    $router->post('/barang/insert_barang',['BarangController','insert_barang']);
    $router->post('/barang/edit_barang',['BarangController','edit_barang2']);

    $router->get('/kategori',['KategoriController','index']);


    $router->run();
  }
}