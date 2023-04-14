<?php
$contoh1 = 'INi contoh dengan kutipan tunggal';
$contoh2 = "INi contoh dengan kutipan ganda";
echo $contoh1;
echo "<br>";
echo $contoh2;
echo "<br>";

$var1 = "Hello";
$result = $var1 . " World";
echo $result;
echo "<br>";
$result2 = "$var1 WORLD<br>";
echo $result2;
echo "<br>";
$result3 = "{$var1} WORLD<br>";
echo $result3;
echo "<br>";
$result4 = 'Hello {$var1} World<br>';
echo $result4;
echo "<br>";
echo $result3[0] . '<br>';

echo substr($result3, 1, 5) . '<br>';

echo strlen($result3) . '<br>';