<?php
try {
  $data = [];
  $f = fopen('data.csv', 'r');

  if (!$f) {
    throw new Exception('file tidak valid');
  }

  do {
    $row = fgetcsv($f);
    $data[] = $row;
  } while ($row);

  fclose($f);
} catch (Exception $e) {
  echo $e->getMessage();
}