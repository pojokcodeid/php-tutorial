<?php

//definisikan file dir
$file_name = "file/template.txt";
if (file_exists($file_name)) {
  echo "File $file_name ada";
} else {
  echo "File $file_name tidak ada";
}

echo '<br>';

if (is_file($file_name)) {
  echo "File $file_name ada";
} else {
  echo "File $file_name tidak ada";
}

echo '<br>';

$file = "readme_x.txt";
if (is_readable($file)) {
  echo "File $file bisa dibaca";
} else {
  echo "File $file tidak bisa dibaca";
}

echo '<br>';

if (is_writable($file)) {
  echo "File $file bisa ditulis";
} else {
  echo "File $file tidak bisa ditulis";
}