<?php
namespace MyApp\Core;

class Routes
{
  public function run()
  {
    $router = new App();
    $router->setDefaultController('DefaultApp');
    $router->setDefaultMethod('index');
    $router->setNamespace('MyApp\Controllers');

    $router->get('/barang', ['BarangController', 'index']);
    $router->get('/barang/index', ['BarangController', 'index']);
    $router->get('/barang/insert', ['BarangController', 'insert']);
    $router->get('/barang/edit/(:id)', ['BarangController', 'edit']);
    $router->post('/barang/insert_data', ['BarangController', 'insert_barang']);
    $router->post('/barang/edit_data', ['BarangController', 'edit_barang']);

    $router->get('/kategori', ['KategoriController', 'index']);


    $router->run();
  }
}