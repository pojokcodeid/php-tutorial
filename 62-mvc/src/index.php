<?php 
if( !session_id() ) session_start();  #ini di buat supaya dibuatkan pertama kali supaya tidak lupa

require_once '../src/config/default.php';
require_once '../src/core/Autoload.php';


// $router=new Router();
// $router->setDefaultController('DefaultApp');
// $router->setDefaultMethod('index');

// $router->get('/',['DefaultApp','index']);
// $router->get('/barang',['Barang','index']);
// $router->get('/barang/insert',['Barang','insert']);
// $router->get('/barang/edit',['Barang','edit']);
// $router->post('/barang/insert_barang',['Barang','insert_barang']);
// $router->post('/barang/edit_barang',['Barang','edit_barang']);

// $router->run();

$routes=new Routes();
$routes->run();