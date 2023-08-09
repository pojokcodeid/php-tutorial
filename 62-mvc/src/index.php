<?php
use MyApp\Config\Config;
use MyApp\Core\Routes;

if (!session_id())
  session_start();

require_once '../vendor/autoload.php';

Config::load();
$routes = new Routes();
$routes->run();