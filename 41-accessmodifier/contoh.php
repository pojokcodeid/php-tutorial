<?php

class Mobil
{
  public $merk;
  protected $warna;
  private $harga;

  public function __construct($merk, $warna, $harga)
  {
    $this->merk = $merk;
    $this->warna = $warna;
    $this->harga = $harga;
  }

  public function getMerk()
  {
    return $this->merk;
  }

  public function getWarna()
  {
    return $this->warna;
  }

  protected function getHarga()
  {
    $this->cek();
    return $this->harga;
  }

  private function cek(): void
  {
    echo  "testing";
  }
}

$mobil = new Mobil("Toyota", "Hitam", 5000000);
echo $mobil->merk;   // dapat diacess dari mana saja karena public 
echo $mobil->getMerk();

//$mobil->warna; tidak dapat diacess karena protected (hanya bisa diacess
//turunannya)
//$mobil->harga; tidak dapat diacess karena private hanya bisa diacess class itu
//sendiri

class Toyota extends Mobil
{
  private $country;
  public function __construct($merk, $warna, $harga)
  {
    parent::__construct($merk, $warna, $harga);
  }

  public function getCountry()
  {
    $var = parent::getHarga();
    return $this->country . ' ' . $var;
  }

  public function setCountry($country)
  {
    $this->country = $country;
  }
}

$toyota = new Toyota("Toyota", "Hitam", 5000000);
$toyota->setCountry("Indonesia");
echo $toyota->getCountry();
