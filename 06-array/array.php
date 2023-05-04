<?php

$score = array(1, 2, 3);
var_dump($score);
echo '<br>';

$score = [1, 2, 3];
print_r($score);

function print_array($data)
{
    echo '<pre>';
    print_r($data);
    echo '</pre>';
}

echo '<br>';
print_array($score);

# mengacess array
echo '<br>';
echo $score[0];

# menambah element array
$score[] = 4;
$score[4] = 5;
print_array($score);

# mengubah element array
echo '<br>';
$score[4] = 2;
print_array($score);

#menghapus element array
echo '<br>';
unset($score[2]);
print_array($score);

echo '<br>';
echo count($score);