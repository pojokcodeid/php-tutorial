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

    $router->get('/kategori', ['Kategori', 'index']);
    $router->get('/kategori/insert', ['Kategori', 'insert']);

    $router->run();
  }
}