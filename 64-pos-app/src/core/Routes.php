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

    // $router->get('/',['DefaultApp','index']);
    $router->get('/barang', ['Barang', 'index']);
    $router->get('/barang/insert', ['Barang', 'insert']);
    $router->get('/barang/(:id)', ['Barang', 'edit']);
    $router->post('/barang/insert', ['Barang', 'insert_barang']);
    $router->post('/barang', ['Barang', 'edit_barang']);

    $router->get('/kategori', ['Kategori', 'index']);
    $router->get('/kategori/insert', ['Kategori', 'insert']);
    $router->post('/kategori/insert', ['Kategori', 'insert_kategori']);
    $router->get('/kategori/(:id)', ['Kategori', 'edit']);
    $router->post('/kategori', ['Kategori', 'edit_kategori']);

    $router->run();
  }
}