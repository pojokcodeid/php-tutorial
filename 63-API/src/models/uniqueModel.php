<?php
namespace MyApp\Models;

use MyApp\Core\Database;
use PDO;

class uniqueModel extends Database
{
  public function __construct()
  {
    parent::__construct();
  }
  public function check($table, $column, $value)
  {
    $sql = "SELECT $column FROM $table WHERE $column = ? ";
    return $this->qry($sql, [$value]);
  }
}