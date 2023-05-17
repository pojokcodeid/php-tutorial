<?php
#sort()
$buah = array("apel", "jeruk", "pisang", "mangga", "durian");
sort($buah);
foreach ($buah as $key => $val) {
    echo "BUah[" . $key . "]=" . $val . "<br>";
}
echo '<br>';

#rsort()
rsort($buah);
foreach ($buah as $key => $val) {
    echo "BUah[" . $key . "]=" . $val . "<br>";
}
echo '<br>';

$umur = array("Andi" => 25, "Caca" => 35, "Budi" => 30);
asort($umur);
foreach ($umur as $key => $val) {
    echo "Umur[" . $key . "]=" . $val . "<br>";
}
echo '<br>';

#ksort()
$employees = [
    'john' => [
        'age' => 24,
        'title' => 'Front end developer'
    ],
    'alice' => [
        'age' => 25,
        'title' => 'Back end developer'
    ],
    'bob' => [
        'age' => 23,
        'title' => 'Designer'
    ]
];
ksort($employees, SORT_STRING);
echo '<pre>';
print_r($employees);
echo '</pre>';
echo '<br>';

#krsort()
krsort($employees, SORT_STRING);
echo '<pre>';
print_r($employees);
echo '</pre>';
echo '<br>';

#usort()
$numbers = [2, 1, 3];
usort($numbers, function ($a, $b) {
    if ($a === $b) {
        return 0;
    }
    return $a < $b ? -1 : 1;
});
echo '<pre>';
print_r($numbers);
echo '</pre>';
echo '<br>';

usort($numbers, function ($a, $b) {
    if ($a === $b) {
        return 0;
    }
    return $a < $b ? 1 : -1;
});
echo '<pre>';
print_r($numbers);
echo '</pre>';
echo '<br>';

# dengan objek
class Person
{
    public $name;
    public $age;
    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }
}

class PersonComparator
{
    public static function compare($a, $b)
    {
        return $a->age <=> $b->age;
    }
}

$group = [
    new Person("Andi", 25),
    new Person("Caca", 35),
    new Person("Budi", 30)
];
usort($group, ['PersonComparator', 'compare']);
echo '<pre>';
print_r($group);
echo '</pre>';
echo '<br>';