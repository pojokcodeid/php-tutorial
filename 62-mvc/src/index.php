<?php
if (!session_id())
  session_start();

require_once '../src/core/Autoload.php';
require_once '../src/config/default.php';

$routes = new Routes();
$routes->run();