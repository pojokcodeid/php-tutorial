<?php 

// read from file properties
$file="../src/config/config.properties";
if (!file_exists($file)) {
  echo "Config file tidak ada, silahkan isi config src/config/config.properties";
  exit;
}
$properties = parse_ini_file($file);

define('BASEURL', $properties['base_url']);

define('DB_HOST', $properties['db_host']);
define('DB_USER', $properties['db_user']);
define('DB_PASS', $properties['db_pass']);
define('DB_NAME', $properties['db_name']);

if($properties['migrate']){
  require_once '../src/config/migrate.php';
}