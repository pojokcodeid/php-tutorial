<?php
class Animal
{
  public $name;
  public $age;

  public function berjalan(): void
  {
    echo "Animal berjalan berjalan";
  }

  public function tambahUmur($umur): int
  {
    $this->age += $umur;
    return $this->age;
  }
}