<?php

abstract class Komputer
{
  public $nama;
  const RAM = 8;

  public function __construct($nama)
  {
    $this->nama = $nama;
  }

  abstract protected function lihat_spec(): string;

  public function getNama()
  {
    return $this->nama;
  }
}

class Laptop extends Komputer
{
  public function lihat_spec(): string
  {
    return "Laptop {$this->nama} memili ram 8 GB";
  }
}

class Pc extends Komputer
{
  public function lihat_spec(): string
  {
    return "Pc {$this->nama} memili ram 16 GB";
  }
}

$laptop = new Laptop("Lenovo");
echo $laptop->lihat_spec();
echo $laptop->getNama();
echo "<br>";

$pc = new Pc("Asus");
echo $pc->lihat_spec();
echo "<br>";