<?php

class Mobil
{
  public $merk; // dapat diacess dari manapun
  protected $warna; //dapat diacess dari class itu sendiri atau turuannya
  private $harga; // hanya bisa diacess kelas itu saja

  public function __construct($merk, $warna, $harga)
  {
    $this->merk = $merk;
    $this->warna = $warna;
    $this->harga = $harga;
  }

  public function getWarna()
  {
    return $this->warna;
  }

  public function getHarga()
  {
    return $this->harga;
  }
}

$mobil = new Mobil("Toyota", "Hitam", 100000);
$mobil->merk = "Toyota";
echo $mobil->merk;

//$mobil->harga = 100000;
//$mobil->warna = "Hitam";
echo $mobil->getWarna();
echo $mobil->getHarga();

class Mobil2 extends Mobil
{
  public function __construct($merk, $warna, $harga)
  {
    parent::__construct($merk, $warna, $harga);
  }

  public function getWarna()
  {
    return $this->warna;
  }
}


$mobil2 = new Mobil2("Toyota", "Hitam 2", 100000);
echo $mobil2->getWarna();