<?php

# function biasa
function hello($nama)
{
    echo "Hello $nama";
}
hello("Budi");
echo '<br>';

#dasar anonymous function
// function($nama){
//     echo "Hello $nama";
// };

$greet = function ($nama) {
    echo "Hello $nama";
};

$greet("Budi");
echo '<br>';

$greet = fn($nama) => "Hello $nama";
echo $greet("Budi");
echo '<br>';

$arr = [1, 2, 3];
$arr_double = array_map(fn($n) => $n * 2, $arr);
print_r($arr_double);
echo '<br>';


$message = 'Hi';
$say = function () use ($message) {
    echo $message;
};
$say();
echo '<br>';

$message = 'Hi';
$say = function () use (&$message) {
    $message = 'Hello';
    echo $message;
};
$say();
echo '<br>';
echo $message;

function multiplier($x)
{
    return function ($y) use ($x) {
        return $x * $y;
    };
}

$multiply = multiplier(2);
echo $multiply(100);
echo '<br>';

$multiply = multiplier(3);
echo $multiply(100);
echo '<br>';