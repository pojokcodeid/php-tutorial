<?php

class Buku
{
  private $judul;
  private $penulis;
  private $halaman;

  function __construct($judul, $penulis, $halaman)
  {
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->halaman = $halaman;
  }

  function __destruct()
  {
    echo "Buku {$this->judul} telah dihapus";
  }

  public function getJudul()
  {
    return $this->judul;
  }

  public function getPenulis()
  {
    return $this->penulis;
  }
}

$buku = new Buku("The Lord of the Rings", "J.R.R. Tolkien", 500);
echo $buku->getJudul();
echo "<br>";
echo $buku->getPenulis();

unset($buku);