<?php

$nilai1 = 1.25;
$nilai2 = -2.5;
$nilai3 = 0.125E1;
$nilai4 = 1_234_456.89;

var_dump($nilai1);
echo '<br>';
var_dump($nilai2);
echo '<br>';
var_dump($nilai3);
echo '<br>';
var_dump($nilai4);
echo '<br>';

$total = 0.1 + 0.1 + 0.1;
if ($total == 0.3) {
    echo 'benar';
} else {
    echo 'salah';
}
echo '<br>';
var_dump($total);

echo '<br>';
echo is_float('xxxx');