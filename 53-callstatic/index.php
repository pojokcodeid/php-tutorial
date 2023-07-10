<?php

class Str
{
  private static $method = [
    'upper' => 'strtoupper',
    'lower' => 'strtolower',
    'len' => 'strlen',
  ];

  public static function __callStatic(string $method, array $args)
  {
    if (!array_key_exists($method, self::$method)) {
      throw new Exception('method not exists');
    }
    return call_user_func_array(self::$method[$method], $args);
  }
}

echo Str::upper('hello world');
echo '<br>';
echo Str::lower('HELLO WORLD');
echo '<br>';
echo Str::len('HELLO WORLD');