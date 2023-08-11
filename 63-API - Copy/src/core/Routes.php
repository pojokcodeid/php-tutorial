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
    $router->get('/barang/(:id)', ['BarangController', 'index']);
    $router->patch('/barang/(:id)', ['BarangController', 'edit']);
    $router->post('/barang', ['BarangController', 'insert']);
    $router->delete('/barang/(:id)', ['BarangController', 'delete']);

    $router->get('/kategori', ['KategoriController', 'index']);


    $router->run();
  }
}