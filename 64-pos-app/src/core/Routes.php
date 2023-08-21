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
    $router->post('/barang/insert', ['Barang', 'insert_barang']);
    $router->get('/barang/(:id)', ['Barang', 'edit']);
    $router->post('/barang', ['Barang', 'edit_barang']);

    $router->get('/kategori', ['Kategori', 'index']);
    $router->get('/kategori/insert', ['Kategori', 'insert']);
    $router->post('/kategori/insert', ['Kategori', 'insert_kategori']);
    $router->get('/kategori/(:id)', ['Kategori', 'edit']);
    $router->post('/kategori', ['Kategori', 'edit_kategori']);

    $router->get('/lokasi', ['Lokasi', 'index']);
    $router->get('/lokasi/insert', ['Lokasi', 'insert']);
    $router->post('/lokasi/insert', ['Lokasi', 'insert_lokasi']);
    $router->get('/lokasi/(:id)', ['Lokasi', 'edit']);
    $router->post('/lokasi', ['Lokasi', 'edit_lokasi']);

    $router->get('/supplier', ['Supplier', 'index']);
    $router->get('/supplier/insert', ['Supplier', 'insert']);
    $router->post('/supplier/insert', ['Supplier', 'insert_supplier']);
    $router->get('/supplier/(:id)', ['Supplier', 'edit']);
    $router->post('/supplier', ['Supplier', 'edit_supplier']);

    $router->get('/pembelian', ['Pembelian', 'index']);
    $router->get('/pembelian/insert', ['Pembelian', 'insert']);
    $router->post('/pembelian/add-barang', ['Pembelian', 'add_barang']);
    $router->get('/pembelian/add-barang', ['Pembelian', 'add_data']);
    $router->get('/pembelian/edit-barang/(:id)', ['Pembelian', 'edit_barang']);
    $router->post('/pembelian/edit-barang/(:id)', ['Pembelian', 'edit_data']);
    $router->get('/pembelian/delete-barang/(:id)', ['Pembelian', 'delete_barang']);
    $router->post('/pembelian/insertdata', ['Pembelian', 'add_item']);
    $router->get('/pembelian/delete', ['Pembelian', 'delete']);
    $router->post('/pembelian', ['Pembelian', 'save']);

    $router->run();
  }
}