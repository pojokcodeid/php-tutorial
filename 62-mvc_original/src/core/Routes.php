<?php
namespace MyApp\Core;

class Routes
{
  public function run()
  {
    $router = new App();
    $router->setDefaultController('DefaultApp');
    $router->setDefaultMethod('index');

    // $router->get('/',['DefaultApp','index']);
    $router->get('/barang', ['Barang', 'index']);
    $router->get('/barang/insert', ['Barang', 'insert']);
    $router->get('/barang/edit', ['Barang', 'edit']);
    $router->post('/barang/insert_barang', ['Barang', 'insert_barang']);
    $router->post('/barang/edit_barang', ['Barang', 'edit_barang2']);

    $router->get('/setting-access', ['SettingController', 'index']);

    $router->run();
  }
}