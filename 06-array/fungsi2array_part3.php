<?php

#contoh sederhana mencari string dalam array
$orang = array("Peter", "Joe", "John", "Glen");
if (in_array("John", $orang)) {
    echo "John ada di dalam array";
} else {
    echo "John tidak ada di dalam array";
}
echo "<br>";

# contoh dengan mode ketat
$orang = array("Peter", "Joe", "John", "Glen", 23);
if (in_array("23", $orang, true)) {
    echo "23 ada di dalam array";
} else {
    echo "23 tidak ada di dalam array";
}
echo "<br>";
$orang = array("Peter", "Joe", "John", "Glen", 23);
if (in_array(23, $orang, true)) {
    echo "23 ada di dalam array";
} else {
    echo "23 tidak ada di dalam array";
}

# mencari array didalam array
$warna = array(
    array("merah", "hijau", "biru"),
    array("cyan", "magneta", "hitam"),
    array("hue", "saturation", "value")
);
echo "<br>";
if (in_array(array("merah", "hijau", "biru"), $warna)) {
    echo "warna RBG ditemukan";
} else {
    echo "warna RGB tidak ditemukan";
}

# menggunakan objek
class Role
{
    private $id;
    private $name;
    public function __construct($id, $name)
    {
        $this->id = $id;
        $this->name = $name;
    }
}

$roles = [
    new Role(1, "admin"),
    new Role(2, "user"),
    new Role(3, "guest")
];
echo "<br>";
if (in_array(new Role(1, "admin"), $roles)) {
    echo "admin ada di dalam array";
}

echo '<br>';
if (in_array(new Role(1, "admin"), $roles, true)) {
    echo "admin ada di dalam array";
} else {
    echo "admin tidak ada di dalam array";
}

# array reverse
$a = array("a" => "Volvo", "b" => "BMW", "c" => "Toyota");
$reversed = array_reverse($a);
$prereverse = array_reverse($a, true);

echo "<br>";
print_r($a);
echo "<br>";
print_r($reversed);
echo "<br>";
print_r($prereverse);