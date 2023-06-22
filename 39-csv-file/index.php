<?php

// $data = [
//   ['Symbol', 'Company', 'Proce'],
//   ['GOOG', 'Google Inc.', '800'],
//   ['AAPL', 'Apple Inc.', '500'],
//   ['AMZN', 'Amazon.com Inc.', '250'],
//   ['YHOO', 'Yahoo! Inc.', '250'],
//   ['FB', 'Facebook, Inc.', '30'],
// ];

// $filename = 'file/stock.csv';
// $f = fopen($filename, 'w');
// if ($f === false) {
//   die('Error open file ' . $filename);
// }

// fputs($f, (chr(0xEF) . chr(0xBB) . chr(0xBF)));

// foreach ($data as $row) {
//   fputcsv($f, $row);
// }

// fclose($f);

$filename = './file/stock.csv';
$data = [];

$f = fopen($filename, 'r');

if ($f === false) {
  die('Error open file ' . $filename);
}

while (($row = fgetcsv($f)) !== false) {
  $data[] = $row;
}

fclose($f);

echo '<pre>';
print_r($data);
echo '</pre>';