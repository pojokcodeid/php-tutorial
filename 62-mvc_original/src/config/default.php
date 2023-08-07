<?php
use MyApp\Core\DotEnv;

(new DotEnv(__DIR__ . '../../.env'))->load();

define('BASEURL', getenv('BASE_URL'));

if (getenv('MIGRATE')) {
  require_once '../src/config/migrate.php';
}