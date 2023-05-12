<?php

function cetak($array)
{
    echo "<pre>";
    print_r($array);
    echo "</pre>";
    echo '<br>';
}

$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
$result = array_merge($array1, $array2);
cetak($result);

# menggabungkan dengan key string
# jika menemukan key yang sama akan diambil yang terakhir
$before = [
    'PHP' => 5,
    'JavaScript' => 4,
    'HTML' => 4,
    'CSS' => 3
];

$after = [
    'PHP' => 2,
    'JavaScript' => 5,
    'MySQL' => 4,
];

$skills = array_merge($before, $after);
cetak($skills);

# spred operator
$even = [2, 4, 6];
$odd = [1, 3, 5];
$all = [...$odd, ...$even];
cetak($all);

$hasil = [...$before, ...$after];
cetak($hasil);

function get_random_numbers()
{
    for ($i = 0; $i < 5; $i++) {
        $random_numbers[] = rand(1, 100);
    }
    return $random_numbers;
}

$random_numbers = [...get_random_numbers()];
cetak($random_numbers);

# menggunakan generator function
function even_number()
{
    for ($i = 2; $i < 10; $i += 2) {
        yield $i;
    }
}
$even = [...even_number()];
cetak($even);

function format_name(string $first, string $middle, string $last): string
{
    return $middle ?
        "$first $middle $last" :
        "$first $last";
}
$names = [
    'first' => 'Pojok',
    'middle' => 'V.',
    'last' => 'Code'
];

$nama = format_name(...$names);
cetak($nama);

# list 
$info = array('kopi', 'coklat', 'kafein');
// Menetapkan semua variabel
list($minuman, $warna, $zat) = $info;
echo "$minuman berwarna $warna dan $zat membuatnya spesial.\n";
// Menetapkan beberapa variabel saja
list($minuman, , $zat) = $info;
echo "$minuman mengandung $zat.\n";
// Atau hanya variabel ketiga saja
list(, , $zat) = $info;
echo "Saya butuh $zat!\n";
// list() tidak dapat bekerja dengan string
list($bar) = "abcde";
var_dump($bar); // NULL

# list bersarang untuk menempatkan variable
$elements = ['body', ['white', 'blue']];
list($element, list($bgcolor, $color)) = $elements;
echo '<br>';
var_dump($element, $bgcolor, $color);

# menggunaakn list dengan array assosiatif
$person = [
    'first_name' => 'John',
    'last_name' => 'Doe',
    'age' => 25
];

list(
    'first_name' => $first_name,
    'last_name' => $last_name,
    'age' => $age
) = $person;
echo '<br>';
var_dump($first_name, $last_name, $age);

# array destructuring
list($a, $b, $c) = [1, 2, 3];
echo '<br>';
echo "$a $b $c"; // 1 2 3

[$a, $b, $c] = [1, 2, 3];
echo '<br>';
echo "$a $b $c"; // 1 2 3

list(
    'scheme' => $scheme,
    'host' => $host,
    'path' => $path
) = parse_url('https://www.phptutorial.net/');
echo '<br>';
echo '<pre>';
var_dump($scheme, $host, $path);
echo '</pre>';

[
    'dirname' => $dirname,
    'basename' => $basename
] = pathinfo('c:\temp\readme.txt');

echo '<br>';
echo '<pre>';
var_dump($dirname, $basename);
echo '</pre>';