<?php
$x = 10;
$y = 20;
$total = $x + $y;
echo $total . '<br>';

$x = $y = 20;
echo $x . '<br>';

$counter = 1;
$counter = $counter + 1;
echo $counter . '<br>';

$counter += 1;
echo $counter . '<br>';

$gretting = "Hello";
$name = "Pojok Code";
$gretting = $gretting . ' ' . $name . '<br>';
echo $gretting;

$gretting = "Hello";
$gretting .= ' ' . $name . '<br>';
echo $gretting;