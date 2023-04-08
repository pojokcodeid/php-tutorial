<?php
$contoh1 = 'Ini contoh string kutipan tunggal';
$contoh2 = "Ini contoh string kutipan ganda";
echo $contoh1 . '<br>';
echo $contoh2 . '<br>';

// penggabungan string
$var1 = "Hello";
$result = $var1 . " World<br>";
echo $result;

$result2 = "$var1 World<br>";
echo $result2;

$result3 = "{$var1} World<br>";
echo $result3;

// jika menggunkaan kutipan tunggal kurung kurawal diangap sebagai string
$result4 = '{$var1} World<br>';
echo $result4;

// mengaksess karakter dalam string 
echo $result3[0] . '<br>';

//mendapatkan substring dari string
echo substr($result3, 1, 5) . '<br>';

// mendapatkan panjang string
echo strlen($result3);