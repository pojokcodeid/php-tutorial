<?php
use MyApp\Core\Routes;

if (!session_id())
  session_start();

require_once '../vendor/autoload.php';
require_once '../src/config/default.php';

$routes = new Routes();
$routes->run();