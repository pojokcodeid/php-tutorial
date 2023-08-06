<?php

class Routes
{
  public function run()
  {
    $router = new App();
    $router->setDefaultController('DefaultApp');
    $router->setDefaultMethod('index');

    $router->get('/barang', ['Barang', 'index']);
    $router->get('/barang/get', ['Barang', 'getById']);
    $router->patch('/barang/edit', ['Barang', 'edit']);
    $router->post('/barang/insert', ['Barang', 'insert']);
    $router->delete('/barang/delete', ['Barang', 'delete']);

    $router->run();
  }
}