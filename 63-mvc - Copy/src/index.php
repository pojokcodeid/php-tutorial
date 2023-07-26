<?php 

if(!session_id()) session_start();

require_once '../src/core/Routes.php';

$routes = new Routes();
$routes->run();