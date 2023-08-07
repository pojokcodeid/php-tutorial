<?php
use MyApp\Core\Routes;

if (!session_id())
  session_start();

require_once '../src/config/default.php';
require_once '../vendor/autoload.php';

$routes = new Routes();
$routes->run();