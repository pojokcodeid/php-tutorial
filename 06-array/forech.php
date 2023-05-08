<?php

$color = ['red', 'green', 'blue'];
foreach ($color as $value) {
    echo $value . '<br>';
}

#array asosiatif
$capitals = [
    'jakarta' => 'indonesia',
    'bali' => 'indonesia',
    'bandung' => 'indonesia',
    'Italy' => 'Roma',
    'Japan' => 'Tokyo',
    'Germany' => 'Berlin'
];

foreach ($capitals as $key => $value) {
    echo $key . ' : ' . $value . '<br>';
}

$a = array(
    "one" => 1,
    "two" => 2,
    "three" => 3,
    "four" => 4,
    "five" => 5
);
foreach ($a as $key => $value) {
    echo $key . ' : ' . $value . '<br>';
}