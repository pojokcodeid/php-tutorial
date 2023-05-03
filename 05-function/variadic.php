<?php

#sebelum 5.6
function sum()
{
    $numbers = func_get_args();
    $total = 0;
    for ($i = 0; $i < count($numbers); $i++) {
        $total += $numbers[$i];
    }
    return $total;
}
echo sum(1, 2, 3) . '<br>';
echo sum(1, 2, 3, 4, 5) . '<br>';

# versi 5.6 keatas
function sum2(...$numbers)
{
    $total = 0;
    for ($i = 0; $i < count($numbers); $i++) {
        $total += $numbers[$i];
    }
    return $total;
}

echo sum2(1, 2, 3) . '<br>';
echo sum2(1, 2, 3, 4, 5) . '<br>';

# versi 7 katas
function sum3(int...$numbers): int
{
    $total = 0;
    for ($i = 0; $i < count($numbers); $i++) {
        $total += $numbers[$i];
    }
    return $total;
}

echo sum3(1, 2, 3) . '<br>';
echo sum3(1, 2, 3, 4, 5, 6, 7, 8, 9) . '<br>';