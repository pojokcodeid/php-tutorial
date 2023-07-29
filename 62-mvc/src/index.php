<?php 
if( !session_id() ) session_start();

require_once '../src/config/default.php';
require_once '../src/core/Autoload.php';

$routes=new Routes();
$routes->run();