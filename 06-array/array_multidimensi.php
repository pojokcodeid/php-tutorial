<?php

$task = [
    ['Learn programming PHP', 2],
    ['Learn programming Java', 3],
    ['Learn programming Python', 4],
    ['Work', 8],
];
echo '<pre>';
print_r($task);
echo '</pre>';

#menambahkan array multi dimensi
$task[] = ['Mencoba projek baru dengan PHP', 10];
echo '<br>';
echo '<pre>';
print_r($task);
echo '</pre>';

#menghapus element dari array multi dimensi
unset($task[3]);
echo '<br>';
echo '<pre>';
print_r($task);
echo '</pre>';

# mengindex ulang array 2 dimensi
array_splice($task, 4, 3);
echo '<br>';
echo '<pre>';
print_r($task);
echo '</pre>';

# iterasi array 2 dimensi
foreach ($task as $key) {
    foreach ($key as $value) {
        echo $value . '<br>';
    }
    echo '<br>';
}

foreach ($task as $key) {
    echo $key[0] . '<br>';
}

# mengacess array 2 dimensi
echo '<br>';
echo $task[0][0];
echo '<br>';
echo $task[0][1];

# membuat aray 2 dimensi dengan fungsi array
$martriks = array(
    array(1, 2, 3),
    array(4, 5, 6),
    array(7, 8, 9)
);
echo '<br>';
echo $martriks[1][2];

$buah = array(
    'apel' => array(
        "warna" => "merah",
        "rasa" => "manis"
    ),
    'jeruk' => array(
        "warna" => "orange",
        "rasa" => "asam"
    ),
    "pisang" => array(
        "warna" => "kuning",
        "rasa" => "manis"
    )
);
echo '<br>';
echo $buah['apel']['rasa'];
echo '<br>';

foreach ($buah as $nama => $property) {
    echo $nama . '<br>';
    foreach ($property as $key => $value) {
        echo $key . ' : ' . $value . '<br>';
    }
    echo '<br>';
}