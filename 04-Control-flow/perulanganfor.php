<?php

for ($i = 1; $i <= 10; $i++) {
    echo "Perulangan ke $i <br>";
}

echo "<hr>";
echo '<br>';

$total = 0;
for ($i = 2; $i <= 10; $i += 2) {
    $total += $i;
    echo $i . '<br>';
}
echo $total;