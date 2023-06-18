<?php

# load file menjadi text
$html = file_get_contents('https://www.php.net/');
// echo $html;

$filename = 'lib/template.txt';
if (!is_readable($filename)) {
  echo "File tidak ditemukan";
  exit;
}

echo file_get_contents($filename);

echo "<br>";

$section = file_get_contents($filename, false, null, 20, 14);
echo $section;
echo "<br>";
# load menjadi array
$lines = file('https://www.php.net/robots.txt', FILE_SKIP_EMPTY_LINES | FILE_IGNORE_NEW_LINES);

if ($lines) {
  foreach ($lines as $line) {
    echo htmlspecialchars($line) . PHP_EOL;
  }
}