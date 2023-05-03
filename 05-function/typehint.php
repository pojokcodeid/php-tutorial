<?php

function add($x, $y)
{
    return $x + $y;
}

$result = add(1, 2);
echo $result;
echo '<br>';

$result = add(1.0, 2.5);
echo $result;
echo '<br>';

$result = add(1, '2');
echo $result;
echo '<br>';

function add2(int $x, int $y)
{
    return $x + $y;
}

$result = add2(1, 2);
echo $result;
echo '<br>';

// $result = add2(1.0, '2.5');
// echo $result;
// echo '<br>';

function add3(int $x, int $y): int
{
    return $x + $y;
}

$result = add3(10, 20);
echo $result;
echo '<br>';

function dd($data): void
{
    echo '<pre>';
    var_dump($data);
    echo '</pre>';
    die;
}
dd(100);