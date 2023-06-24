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
    echo "Laptop hidup";
  }

  public function gantiPemilik($pemilikBaru)
  {
    $this->pemilik = $pemilikBaru;
  }
}

$laptop = new Laptop("Andi", "Dell", 15);
$laptop->hidupkanLaptop();
echo $laptop->pemilik;
$laptop->gantiPemilik("Budi");
echo $laptop->pemilik;