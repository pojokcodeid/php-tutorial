<?php
echo (int)12.5 . '<br>';
echo (int)12.1 . '<br>';
echo (int)12.9 . '<br>';
echo (int)-12.7 . '<br>';

$message = "Hi";
$num = (int) $message;
echo $num . '<br>';

$amount = (int)'100 USD';
echo $amount . '<br>';

$qty = null;
echo (int)$qty . '<br>';

$amount = (float)100;
echo $amount . '<br>';

$amount = 100;
echo (string)$amount . 'USD <br>';
echo $amount . ' USD <br>';

$is_user_logged_in = true;
echo (string)$is_user_logged_in . '<br>';

$number = [1, 2, 3, 4, 5];
echo (string)$number . '<br>'; // error tidak bisa di conversi
