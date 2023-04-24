<?php

$num = 1;

while ($num <= 10) {
    echo $num . "<br>";
    $num++;
}

echo "<br>";

#bilangan fibonacci
$num1 = 0;
$num2 = 1;

echo "Detet BIlangan Fibonacci: ";
while ($num1 <= 100) {
    echo $num1 . " ";
    $num3 = $num1 + $num2;
    $num1 = $num2;
    $num2 = $num3;
}
echo "<br>";

#alternative penulisan while
$total = 0;
$number = 1;
while ($number <= 10):
    $total += $number;
    $number++;
endwhile;
echo $total;