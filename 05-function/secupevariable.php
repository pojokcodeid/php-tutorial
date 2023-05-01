<?php

#contoh varibale glonbal
$message = "Hello";

# contoh local variable
function say()
{
    $message = "Hello World";
    echo $message;
}

say();
echo '<br>';
echo $message;

# contoh variable static
function get_counter()
{
    static $counter = 1;
    return $counter++;
}
echo '<br>';
echo get_counter() . '<br>';
echo get_counter() . '<br>';
echo get_counter() . '<br>';
echo '<br>';

# function parameter
function sum($items)
{
    $total = 0;
    foreach ($items as $item) {
        $total += $item;
    }
    return $total;
}
echo sum([1, 2, 3, 4]) . '<br>';