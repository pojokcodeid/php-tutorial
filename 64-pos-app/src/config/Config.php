<?php
namespace MyApp\Config;

use MyApp\Core\DotEnv;

class Config
{
  public static function run()
  {
    (new DotEnv(__DIR__ . '../../.env'))->load();

    define('BASEURL', getenv('BASE_URL'));

    if (getenv('MIGRATE')) {
      require_once '../src/config/migrate.php';
    }
  }
}