<?php

class Laptop
{
  public $pemilik;
  public $merk;
  public $ukuranLayar;

  public function __construct($pemilik, $merk, $ukuranLayar)
  {
    $this->pemilik = $pemilik;
    $this->merk = $merk;
    $this->ukuranLayar = $ukuranLayar;
  }

  public function hidupkanLaptop()
  {
    echo "Hidupkan Laptop";
  }

  public function matikanLaptop()
  {
    echo "Matikan Laptop";
  }

  public function gantiPemilik($pemilikBaru)
  {
    $this->pemilik = $pemilikBaru;
  }
}

$laptop = new Laptop("Rizky", "Asus", "15.6");
$laptop->hidupkanLaptop();
echo $laptop->pemilik . '<br>';
$laptop->gantiPemilik("Pojok Code");
echo $laptop->pemilik . '<br>';
