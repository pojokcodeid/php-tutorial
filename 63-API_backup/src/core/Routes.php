<?php

class Routes
{
  public function run()
  {
    $router = new App();
    $router->setDefaultController('DefaultApp');
    $router->setDefaultMethod('index');

    $router->get('/barang', ['Barang', 'index']);
    $router->get('/barang/:id', ['Barang', 'index']);
    $router->patch('/barang/:id', ['Barang', 'edit']);
    $router->post('/barang', ['Barang', 'insert']);
    $router->delete('/barang/:id', ['Barang', 'delete']);

    $router->run();
  }
}