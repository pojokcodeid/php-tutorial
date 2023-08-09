<?php
use MyApp\Core\Database;

class KategoriModel extends Database
{
  public function __construct()
  {
    parent::__construct();
    $this->setTableName('kategori');
    $this->setColumn(['id_kategori', 'nama_kategori']);
  }

  public function getAll()
  {
    return $this->get()->fetchAll();
  }
}