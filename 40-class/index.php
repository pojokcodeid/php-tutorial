<?php
require_once __DIR__ . '/entity/Animal.php';

$animal = new Animal();
$animal->name = "Mickey";
$animal->age = 3;
echo $animal->name;
echo $animal->age;
$animal->berjalan();
echo '<br>';
echo $animal->tambahUmur(5);