<?php

$buah = array("a" => "apel", "b" => "jeruk", "c" => "mangga");
array_unshift($buah, "mangga", "rambutan");
print_r($buah);
echo "<br>";

# array assosiatif
$colors = [
    'red' => '#ff0000',
    'green' => '#00ff00',
    'blue' => '#0000ff'
];
$colors = ['black' => '#000000', 'white' => '#ffffff'] + $colors;
print_r($colors);

# array push
echo '<br>';
$warna = array("merah", "hijau");
array_push($warna, "biru", "kuning");
print_r($warna);

// contoh array assosiatif
$roles = [
    'admin' => 1,
    'editor' => 2,
];
$roles['approver'] = 3;
echo '<br>';
print_r($roles);

# array pop
echo '<br>';
$buah = array("apel", "jeruk", "mangga");
$terakhir = array_pop($buah);
print_r($buah);
echo '<br>';
print_r($terakhir);

# array shift
$angka = array(10, 20, 30, 40);
$pertama = array_shift($angka);
echo '<br>';
print_r($angka);
echo '<br>';
print_r($pertama);