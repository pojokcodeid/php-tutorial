<?php
$my_var = 'PHP'; // ini sebuah string
$my_var = 100; // ini sebuah integer

$qty = 20;
if ($qty == '20') {
  echo 'Sama';  // hasilnya sma padahal type datanya berbeda
}

$total = 100;
$qty = "20";
$total = $total + $qty;
echo $total; // hasilnya 120

$total2 = 100;
$qty2 = "20 pcs";
// karena kita menggunakan versi terbaru 8.2 sudah ada proteksi
// versi yang lama masih bisa di operasikan
$total2 = $total2 + $qty2;
echo $total2; // hasilnya error karena tidak bisa di conversi
