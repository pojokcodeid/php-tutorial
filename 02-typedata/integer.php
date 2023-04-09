<?php
$nilai1 = 2000;
$nilai2 = -100;
$nilai3 = 12345;

var_dump($nilai1);
var_dump($nilai2);
var_dump($nilai3);

echo '<br>';
echo PHP_INT_SIZE . '<br>';
echo PHP_INT_MAX . '<br>';
echo PHP_INT_MIN . '<br>';

$nilai4 = 1_000_000;
var_dump($nilai4);

$nilai5 = +010;
var_dump($nilai5);

echo '<br>';
$nilai6 = 0x10;
var_dump($nilai6);

echo '<br>';
$nilai7 = 0b10;
var_dump($nilai7);

echo '<br>';
echo is_int($nilai7) . '<br>';
echo '<br>';
echo 'contoh = ' . is_int('xxxx');

