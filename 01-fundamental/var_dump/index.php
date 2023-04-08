<?php
$balance = 100;
$message = "Hello World";

var_dump($balance);
var_dump($message);
echo '<pre>';
var_dump($balance);
echo '</pre>';
echo '<pre>';
var_dump($message);
echo '</pre>';


function d($data)
{
    echo '<pre>';
    var_dump($data);
    echo '</pre>';
}

d($balance);
d($message);

$pesn = "<h1>Hello World</h1>";
d($pesn);
die($pesn);
echo 'ini text after abort';