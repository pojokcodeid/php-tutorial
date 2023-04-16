<?php

#operator kesetaraan
$x = 10;
$y = 10;
var_dump($x == $y);

echo "<br>";
$x = 10;
$y = 20;
var_dump($x == $y);

echo "<br>";
$x = 10;
$y = '10';
var_dump($x == $y);

#tidak sama dengan 
echo "<br>";
$x = 20;
$y = 10;
var_dump($x != $y);

echo "<br>";
$x = 20;
$y = 10;
var_dump($x <> $y);

# operator kesetaraan identik
echo "<br>";
$x = 10;
$y = '10';
var_dump($x === $y);

echo "<br>";
$x = 10;
$y = '10';
var_dump($x !== $y);

$x = 10;
$y = '10';
var_dump($x != $y);

echo "<br>";
#lebih besar
$x = 20;
$y = 20;
var_dump($x > $y);

#lebih besar samadengan
$x = 20;
$y = 20;
var_dump($x >= $y);

#lebih kecil
echo "<br>";
$x = 20;
$y = 20;
var_dump($x < $y);

#lebih kecil samadengan
echo "<br>";
$x = 20;
$y = 20;
var_dump($x <= $y);