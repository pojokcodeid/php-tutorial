<?php

//load data dari database
$name = "Pojok Code";
$address = "Jl. Merdeka No 1 Jakarta";

$filename = "template.htm";
$fh = fopen($filename, "r");
$hasil = "";
if ($fh) {
  while ($line = fgets($fh)) {
    $hasil .= $line;
  }
  fclose($fh);
}

echo sprintf($hasil, $name, $address);