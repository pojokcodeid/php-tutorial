<?php

#ini contoh expicit 
echo (int) 12.5 . '<br>';
echo (int) '12.1' . '<br>';
echo (int) '12' . '<br>';
echo (int) -12.5 . '<br>';

$message = "Hi";
$num = (int) $message;
echo $num . '<br>';

$amount = (int) '100 USD';
echo $amount . '<br>';

$amount = (float) 100;
echo $amount . '<br>';

$qty = NULL;
echo (int) $qty . '<br>';

$amount = 100;
echo (string) $amount . ' USD <br>';

$is_user_login = true;
echo (string) $is_user_login . '<br>';

#implicit
$numINt = 10;
$numFloat = $numINt + 0.1;
echo $numFloat . '<br>';
echo gettype($numFloat) . '<br>';

$numString = "30";
$total = $numString + 5;
echo $total . '<br>';
echo gettype($total) . '<br>';