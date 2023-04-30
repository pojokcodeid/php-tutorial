<?php

function luas_persegi()
{
    $sisi = 5;
    $luas = $sisi * $sisi;
    return $luas;
}
echo luas_persegi();
echo "<br>";

# fungsi dengan parameter 
function greeting($nama, $umur)
{
    echo "Halo, nama saya $nama, umur saya $umur tahun.";
}
greeting("Pojok Code", 20);
echo "<br>";

#fungsi denga default parameter
function calculateArea($length = 0, $width = 0, $height = 0)
{
    $volume = $length * $width * $height;
    return $volume;
}
$volume1 = calculateArea();
$volume2 = calculateArea(5, 10, 5);
$volume3 = calculateArea(5, 7);
echo $volume1;
echo "<br>";
echo $volume2;
echo "<br>";
echo $volume3;
echo "<br>";

#fungsi dengan pas by value
function tambah($a, $b)
{
    $a++;
    $b++;
    $c = $a + $b;
    return $c;
}
$a = 5;
$b = 10;
$hasilTambah = tambah($a, $b);
echo "Hasil tambah dari $a dan $b adalah : $hasilTambah";
echo "<br>";

#fungsi dengan pas by reference
function tambah2(&$a, &$b)
{
    $a++;
    $b++;
    $c = $a + $b;
    return $c;
}
$a = 5;
$b = 10;
$hasilTambah = tambah2($a, $b);
echo "Hasil tambah dari $a dan $b adalah : $hasilTambah";
echo "<br>";