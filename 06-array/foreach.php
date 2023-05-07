<?php
$color = ['red', 'green', 'blue'];
foreach ($color as $value) {
    echo $value . '<br>';
}

#array assosiatif
$capitals = [
    'France' => 'Paris',
    'Germany' => 'Berlin',
    'Italy' => 'Rome',
    'Japan' => 'Tokyo',
];
foreach ($capitals as $key => $value) {
    echo "Ibukota negara {$key} adalah {$value}<br>";
}

$a = array(
    "one" => 1,
    "two" => 2,
    "three" => 3,
    "seventeen" => 17
);

foreach ($a as $k => $v) {
    echo "\$a[$k] => $v.<br>";
}