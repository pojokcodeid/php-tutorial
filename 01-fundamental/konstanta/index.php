<?php
define('WIDH', '1145px');
echo WIDH;

define('ORIGIN', [0, 0]);
echo '<br>';
var_dump(ORIGIN);

const SALES_TAX = 0.1;
$gross_price = 1000;
$net_price = $gross_price - $gross_price * SALES_TAX;
echo '<br>';
echo $net_price;

const RGB = ['red', 'green', 'blue'];
echo '<br>';
echo RGB[0];

$nilai = 1;
if ($nilai == 1) {
    define('WARNA', '#cccccc');
}
echo '<br>';
echo WARNA;

// if($nilai==1){
//     const COLOR2="#ffffff";
// }

define('PREFIX', 'OPTION');
define(PREFIX . '_1', 1);
define(PREFIX . '_2', 2);
define(PREFIX . '_3', 3);

echo '<br>';
echo OPTION_1;
echo OPTION_2;
echo OPTION_3;