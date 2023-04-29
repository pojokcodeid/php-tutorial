<?php

for ($i = 1; $i <= 10; $i++) {
    if ($i % 2 == 0) {
        continue;
    }
    echo $i . "<br>";
}

echo "<hr>";

$students = [
    ['name' => 'John', 'score' => 80],
    ['name' => 'Mary', 'score' => 90],
    ['name' => 'Peter', 'score' => 70],
    ['name' => 'Josh', 'score' => 85],
    ['name' => 'Jim', 'score' => 60],
    ['name' => 'Jack', 'score' => 75],
];

foreach ($students as $student) {
    if ($student['score'] < 75) {
        continue;
    }
    echo $student['name'] . ' - ' . $student['score'] . "<br>";
}