<?php

# break dalam perulangan for
for ($i = 0; $i < 10; $i++) {
    if ($i == 5) {
        break;
    }
    echo $i . "<br>";
}
echo '<hr>';

# break dalam do while
$j = 0;
do {
    if ($j === 5) {
        break;
    }
    echo $j . "<br>";
    $j++;
} while ($j < 10);
echo '<hr>';

# break dalam while
$k = 0;
while ($k < 10) {
    if ($k === 5) {
        break;
    }
    echo $k . "<br>";
    $k++;
}
echo '<hr>';

# break dalam loop bersarang
$i = 0;
$j = 0;
for ($i = 0; $i < 5; $i++) {
    for ($j = 0; $j < 3; $j++) {
        if ($i === 3) {
            break 2;
        }
        echo "$i,$j<br>";
    }
}
echo '<hr>';