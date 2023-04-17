<?php

#operator AND
$price = 100;
$qty = 2;
$discount = $qty > 3 && $price > 99;
var_dump($discount);

## hubungan arus pendek
$debug = false;
$debug && print('PHP and operator demo');

# operator OR
echo '<br>';
$exipre = false;
$purged = true;
$clear_cache = $exipre || $purged;
var_dump($clear_cache);
echo '<br>';

echo '<br>';
function connect_to_db()
{
    return true;
}
connect_to_db() || die('Database connection failed');
echo '<br>';

$result = false or true;
var_dump($result);

echo '<br>';
($result = false) or true;
var_dump($result);

echo '<br>';
$result = (false or true);
var_dump($result);

echo '<br>';
$result = false || true;
var_dump($result);

#operator NOT
echo '<br>';
$prioritas = 10;
var_dump(!$prioritas);