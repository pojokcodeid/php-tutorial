<?php

#membuat arraw function ke variable 
$eq = fn($x, $y) => $x == $y;
echo $eq(2, '2');

# lewati fungsi panah ke fungsi
$list = [10, 20, 30];
$list = array_map(fn($item) => $item * 2, $list);
echo '<br>';
echo '<pre>';
print_r($list);
echo '</pre>';

# mengambalikan fungsi panah dari suatu fungsi
function multiplier($x)
{
    return fn($y) => $x * $y;
}
$double = multiplier(2);
echo '<br>';
echo $double(10);
echo '<br>';