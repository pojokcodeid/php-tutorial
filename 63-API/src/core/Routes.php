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
    $router->put('/barang/(:id)', ['BarangController', 'edit']);
    $router->post('/barang', ['BarangController', 'insert']);
    $router->delete('/barang/(:id)', ['BarangController', 'delete']);

    $router->post('/register', ['AutentikasiController', 'register']);
    $router->post('/login', ['AutentikasiController', 'login']);
    $router->get('/refresh', ['AutentikasiController', 'refreshToken']);

    $router->get('/kategori', ['KategoriController', 'index']);


    $router->run();
  }
}