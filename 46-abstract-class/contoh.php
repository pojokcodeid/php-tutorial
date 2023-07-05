<?php

abstract class Komputer
{
  public $nama;

  public function __construct($nama)
  {
    $this->nama = $nama;
  }

  abstract protected function lihat_spec();

  protected function run()
  {
    echo "Komputer {$this->nama} dijalankan";
  }
}

interface Sound
{

  public function makeSound();
}

class Laptop extends Komputer implements Sound
{
  public function __construct($nama)
  {
    parent::__construct($nama);
  }

  public function lihat_spec()
  {
    return "Laptop {$this->nama} memili ram 8 GB";
  }

  public function makeSound()
  {
    echo "Laptop {$this->nama} make sound";
  }

  public function jalankan()
  {
    parent::run();
  }
}

$laptop = new Laptop("Lenovo");
echo $laptop->lihat_spec();
echo '<br>';
$laptop->makeSound();
echo '<br>';
$laptop->jalankan();