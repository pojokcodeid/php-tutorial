<?php

function cetak($array)
{
    echo "<pre>";
    print_r($array);
    echo "</pre>";
    echo '<br>';
}

$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "square", 4);
$result = array_merge($array1, $array2);
cetak($result);

# penggabungan dengan key string
$before = [
    "PHP" => 5,
    "Javascript" => 4,
    "HTML" => 3,
    "CSS" => 2
];
$after = [
    "PHP" => 2,
    "Javascript" => 3,
    "MySQL" => 4
];
$skil = array_merge($before, $after);
cetak($skil);

# spred operator
$even = [2, 4, 6];
$odd = [1, 3, 5];
$all = [...$even, ...$odd];
cetak($all);

function get_random_numbers()
{
    for ($i = 0; $i < 5; $i++) {
        $random_numbers[] = rand(1, 100);
    }
    return $random_numbers;
}
$random_numbers = [...get_random_numbers()];
cetak($random_numbers);

# generator function
function even_number()
{
    for ($i = 2; $i < 10; $i += 2) {
        yield $i;
    }
}
$generator = [...even_number()];
cetak($generator);

function format_name(string $first, string $middle, string $last): string
{
    return $middle ? "$first $middle $last" : "{$first} {$last}";
}
$names = [
    'first' => 'Pojok',
    'middle' => 'v',
    'last' => 'Code'
];
$nama = format_name(...$names);
cetak($nama);

#list
$info = array('kopi', 'coklat', 'kafein');
list($minuman, $warna, $zat) = $info;
echo "$minuman berwarna  $warna dan  $zat membuatnya spesial";

list($minuman, , $zat) = $info;
echo '<br>';
echo "$minuman mengandung  $zat";

list(, , $zat) = $info;
echo '<br>';
echo "saya butuh $zat";

list($bar) = "abcd";
echo '<br>';
var_dump($bar);

$elements = ['body', ['white', 'blue']];
list($element, list($bgcolor, $color)) = $elements;
echo '<br>';
var_dump($element, $bgcolor, $color);

$person = [
    'first_name' => 'Pojok',
    'last_name' => 'Code',
    'age' => 20
];
list(
    'first_name' => $first_name,
    'last_name' => $last_name,
    'age' => $age
) = $person;
echo '<br>';
var_dump($first_name, $last_name, $age);

#array destrukturing
list($a, $b, $c) = [1, 2, 3];
echo '<br>';
var_dump($a, $b, $c);

[$a, $b, $c] = [1, 2, 3];
echo '<br>';
var_dump($a, $b, $c);

list(
    'scheme' => $schema,
    'host' => $host,
    'path' => $path
) = parse_url('https://www.php.com/');
echo '<br>';
echo '<pre>';
var_dump($schema, $host, $path);
echo '</pre>';

[
    'dirname' => $dirname,
    'basename' => $basename
] = pathinfo('c:\temp\readme.txt');
echo '<br>';
var_dump($dirname, $basename);