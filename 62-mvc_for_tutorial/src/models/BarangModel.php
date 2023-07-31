<?php

class BarangModel extends Database
{
  public function __construct()
  {
    parent::__construct();
  }

  public function getAll()
  {
    $query = "SELECT * FROM barang";
    return $this->qry($query)->fetchAll();
  }
}