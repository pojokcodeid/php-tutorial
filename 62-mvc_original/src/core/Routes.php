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
    $router->get('/barang/edit/:id', ['Barang', 'edit']);
    $router->post('/barang/insert', ['Barang', 'insert_barang']);
    $router->post('/barang/edit', ['Barang', 'edit_barang2']);

    $router->get('/setting-access', ['SettingController', 'index']);

    // test routing
    $router->get('/coba/panjang/url', ['Coba', 'index']);
    $router->get('/coba/panjang/url/:id', ['Coba', 'param1']);
    $router->get('/coba/panjang/url/:id/:id/:id', ['Coba', 'param2']);
    $router->get('/coba/panjang/url/coba/:id/:id', ['Coba', 'param2']);

    $router->run();
  }
}