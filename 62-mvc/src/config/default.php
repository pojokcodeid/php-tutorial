<?php

(new DotEnv(__DIR__ . '../../.env'))->load();

define('BASEURL', getenv('BASE_URL'));

define('DB_HOST', getenv('DB_HOST'));
define('DB_USER', getenv('DB_USER'));
define('DB_PASS', getenv('DB_PASSWORD'));
define('DB_NAME', getenv('DB_NAME'));
define('DB_PORT', getenv('DB_PORT'));

if (getenv('MIGRATE')) {
  require_once '../src/config/migrate.php';
}