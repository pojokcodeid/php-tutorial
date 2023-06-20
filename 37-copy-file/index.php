<?php

$source = './file/readme.txt';
$dest = './file/readme.bak';

function copy_file($source, $dest, $overwriten = true): bool
{
  if (!file_exists($source)) {
    return false;
  }

  if (!$overwriten && file_exists($dest)) {
    return false;
  }

  return copy($source, $dest);
}

$hasis = copy_file($source, $dest, true) ? 'berhasil' : 'gagal';
echo $hasis;