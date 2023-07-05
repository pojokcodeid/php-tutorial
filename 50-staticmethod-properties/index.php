<?php

class App
{
  private static $app = null;
  private function __construct()
  {

  }

  public static function get()
  {
    if (self::$app == null) {
      self::$app = new App();
    }
    return self::$app;
  }

  public function boostrap()
  {
    echo "Boostrap App ...";
  }
}

$app = App::get();
$app->boostrap();

class Foo
{
  const CONSTAN = 'nilai konstan';
}

echo Foo::CONSTAN;

abstract class Model
{
  protected const TABLE_NAME = '';
  public static function all()
  {
    return 'SELECT * FROM ' . static::TABLE_NAME;
  }
}

class User extends Model
{
  public const TABLE_NAME = 'users';
}

class Role extends Model
{
  public const TABLE_NAME = 'roles';
}

echo '<br>';
echo User::all();
echo '<br>';
echo Role::all();