<?php

for ($i = 1; $i <= 10; $i++) {
    if ($i % 2 == 0) {
        continue;
    }
    echo $i . " ";
}
echo '<hr>';

$students = [
    ['name' => 'John', 'score' => 80],
    ['name' => 'Jane', 'score' => 90],
    ['name' => 'Jim', 'score' => 70],
    ['name' => 'Josh', 'score' => 85],
    ['name' => 'Jack', 'score' => 60]
];

foreach ($students as $student) {
    // Skip students with scores below 75
    if ($student['score'] < 75) {
        continue;
    }

    echo $student['name'] . " passed with a score of " . $student['score'] . "<br>";
}