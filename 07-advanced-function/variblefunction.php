<?php

$f = 'strlen';
echo $f('hello');
echo '<br>';

// $f = 'strlenx';
// echo $f('hello');
// echo '<br>';

require_once __DIR__ . '/Str.php';
$s = new Str('hello');
echo '<br>';
echo $s->convert('title');
echo '<br>';
echo $s->convert('upper');

$str1 = new Str('hello');
$str2 = new Str('hellox');
$action = 'compare';
echo '<br>';
echo Str::$action($str1, $str2);