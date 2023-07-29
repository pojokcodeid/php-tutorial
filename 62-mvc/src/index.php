<?php 
if( !session_id() ) session_start();  #ini di buat supaya dibuatkan pertama kali supaya tidak lupa

require_once '../src/config/default.php';
require_once '../src/core/Autoload.php';

$routes=new Routes();
$routes->run();