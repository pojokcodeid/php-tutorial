<?php
$niai1 = 2000;
$niai2 = -100;
$niai3 = 12345;

var_dump($niai1);
var_dump($niai2);
var_dump($niai3);

echo '<br>';
echo PHP_INT_SIZE . '<br>';
echo PHP_INT_MIN . '<br>';
echo PHP_INT_MAX . '<br>';

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
echo is_int($niai1) . '<br>';
