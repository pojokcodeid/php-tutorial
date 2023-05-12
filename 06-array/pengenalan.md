# ARRAY

Menurut definisi, array adalah daftar elemen

di PHP ada 2 jenis array

1. Konstruksi array()

```php
<?php
$empty_array = array();
$scores = array(1, 2, 3);
```

2. array sintak [].

```php
<?php
$empty_array = [];
$scores = [1, 2, 3];
```

## Menampilkan Array

```php
<?php
$scores = [1, 2, 3];
var_dump($scores);

echo "<br>";
$scores=array(1,2,3);
print_r($scores);
```

## mengacess element Array

````php
<?php
$array_name[index]

$scores = [1, 2, 3];
echo $scores[0];

## menambahkan element array
```php
<?php
$scores = [1, 2, 3];
$scores[] = 4;

$scores = [1, 2, 3];
$scores[3] = 4;
````

## Mengubah Element Array

```php
$array_name[index] = $new_element;
<?php

$scores = [1, 2, 3];
$scores[0] = 0;
```

## menghapus element array

```php
<?php
$scores = [1, 2, 3];
unset($scores[0]);
```

## menampilkan panjang array

```php
<?php
$scores = [1, 2, 3];
echo count($scores);
```

# ARRAY Assosiative

Array assosiative di PHP adalah jenis array yang menggunakan string atau integer sebagai kunci untuk mengakses nilai. Array assosiative juga disebut map terurut, yang dapat digunakan untuk berbagai struktur data seperti hash table, dictionary, set, dll. Nilai dalam array assosiative dapat berupa tipe apa pun, bahkan array lain

Ada dua cara untuk membuat array assosiative di PHP, yaitu menggunakan fungsi array() atau tanda kurung siku

```php
<?php
// Cara pertama
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

// Cara kedua
$age['Peter'] = "35";
$age['Ben'] = "37";
$age['Joe'] = "43";
```

Kunci bernama kemudian dapat digunakan dalam skrip untuk mengambil atau mengubah nilai

```php
// Mengambil nilai
echo "Peter is " . $age['Peter'] . " years old.";

// Mengubah nilai
$age['Ben'] = "40";
```

Untuk mengulang dan mencetak semua nilai dari array assosiative, kita bisa menggunakan foreach loop, seperti ini

```php
<?php
foreach($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}
```

# ARRAY FOREACH

foreach adalah sebuah perintah yang bisa digunakan untuk mengulang eleent array.

```php
<?php

foreach ($array_name as $element) {
    // process element here
}
```

# ARRAY MULTIDIMENSI

Array multidimensi adalah array yang memiliki lebih dari satu dimensi. Misalnya, array dua dimensi adalah array dari array. Ini seperti tabel baris dan kolom.

Di PHP, elemen dalam array bisa menjadi array lain. Oleh karena itu, untuk mendefinisikan array multidimensi, Anda mendefinisikan array dari array.

contoh array 1 dimensi

```php
<?php
$scores = [1, 2, 3, 4, 5];
```

atau

```php
<?php
$rates = [
	'Excellent' => 5,
	'Good' => 4,
	'OK' => 3,
	'Bad' => 2,
	'Very Bad' => 1
];
```

- contoh array dua dimensi

```php
$tasks = [
    ['Learn PHP programming', 2],
    ['Practice PHP', 2],
    ['Work', 8],
    ['Do exercise' 1],
];
```

# FUNGSI-FUNGSI ARRAY

## Array Unshift

Fungsi array_unshift() di PHP digunakan untuk menambahkan satu atau lebih elemen ke awal array. Elemen yang sudah ada di dalam array akan bergeser ke posisi indeks yang lebih tinggi untuk memberi ruang bagi elemen baru. Fungsi ini tidak menggantikan elemen yang sudah ada di dalam array.

```php
<?php
$buah = array("a" => "apel", "b" => "pisang");
array_unshift($buah, "jeruk", "mangga");
print_r($buah);
```

## Array Push

Fungsi array_push() di PHP digunakan untuk menambahkan satu atau lebih elemen ke akhir array. Elemen yang ditambahkan akan memiliki kunci numerik, bahkan jika array memiliki kunci string. Fungsi ini mengembalikan panjang baru dari array

```php
<?php
$warna = array("merah", "hijau");
array_push($warna, "biru", "kuning");
print_r($warna);
```

## array pop

Fungsi array_pop() di PHP digunakan untuk menghapus elemen terakhir dari array dan mengembalikannya. Fungsi ini mengurangi panjang array sebanyak satu elemen. Fungsi ini hanya bekerja untuk array dengan kunci numerik

```php
<?php
$buah = array("apel", "pisang", "jeruk", "mangga");
$terakhir = array_pop($buah);
print_r($buah);
echo $terakhir;
```

## array shift

Fungsi array_shift() di PHP digunakan untuk menghapus elemen pertama dari array dan mengembalikannya. Fungsi ini memendekkan array sebanyak satu elemen dan memindahkan semua elemen ke bawah.

```php
<?php
$angka = array(10, 20, 30, 40);
$pertama = array_shift($angka);
print_r($angka);
echo $pertama;
```

# ARRAY FUNCTION PART 2

## array_keys

Fungsi array_keys() di PHP mengembalikan kunci-kunci dari sebuah array atau sebagian kunci. Fungsi ini menerima sebuah array masukan, sebuah nilai pencarian opsional, dan sebuah parameter ketat opsional.

```php
<?php
$angka = array(10, 20, 30, 40);
$angka = array_keys($angka);
print_r($angka);
```

## array_key_exists

Fungsi array_key_exists() di PHP digunakan untuk memeriksa apakah sebuah kunci atau indeks tertentu ada dalam sebuah array atau tidak. Fungsi ini mengembalikan true jika kunci tersebut ditemukan dalam array dan false jika tidak

```php
array_key_exists(string|int $key, array $array): bool
```

# ARRAY FUNCTION PART 3

## in_array function

Fungsi in_array() adalah fungsi bawaan di PHP yang digunakan untuk mencari nilai tertentu dalam sebuah array. Fungsi ini mengembalikan true jika nilai ditemukan dan false jika nilai tidak ditemukan. Fungsi ini dapat menerima tiga parameter: nilai yang dicari, array yang dicari, dan mode opsional untuk menentukan apakah tipe nilai juga harus cocok. Pencarian bersifat case-sensitive jika nilai adalah string dan mode diatur ke true. Fungsi ini dapat digunakan untuk memeriksa apakah nilai ada dalam array atau tidak

```php
<?php
$buah = array("apel", "jeruk", "mangga", "nanas");
if (in_array("mangga", $buah)) {
 echo "Mangga ada dalam array";
} else {
 echo "Mangga tidak ada dalam array";
}
?>
```

# Array Reverse

Fungsi array_reverse() adalah fungsi bawaan di PHP yang digunakan untuk mengembalikan array dengan urutan elemen yang terbalik. Fungsi ini dapat menerima dua parameter: array yang diinputkan, dan boolean untuk menentukan apakah kunci array harus dipertahankan atau tidak. Fungsi ini mengembalikan array baru yang terbalik.

# Array Function Part 4

## array_merge

Fungsi array_merge() di PHP adalah fungsi bawaan yang digunakan untuk menggabungkan atau menyatukan dua atau lebih array menjadi satu array baru.

perintah dasarnya:
array_merge ( array ...$arrays ) : array

contoh :

```php
<?php
$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
$result = array_merge($array1, $array2);
print_r($result);
?>
```
## Spread operator
Spread operator adalah fitur baru yang diperkenalkan di PHP 7.4, yang digunakan untuk ekspresi array. Spread operator ditandai dengan tiga titik (…). Spread operator menyebar anggota dari sebuah array, yang berarti jika kita meletakkan tiga titik ini di awal sebuah array, maka nilai-nilai dalam array akan tersebar di tempat
Spread operator dapat digunakan untuk menggabungkan beberapa array menjadi satu array dengan cara yang lebih mudah dan efisien daripada fungsi array_merge()
```php
<?php
$even = [2, 4, 6];
$odd = [1, 3, 5];
$all = [...$odd, ...$even];
print_r($all);
?>
```
# list 
list() adalah sebuah konstruksi bahasa yang digunakan untuk menetapkan sejumlah variabel seolah-olah mereka adalah sebuah array. list() bukanlah sebuah fungsi, tetapi sebuah konstruksi sintaksis. list() hanya dapat bekerja pada array numerik dan mengasumsikan indeks numerik dimulai dari 0

```php
<?php
$info = array('kopi', 'coklat', 'kafein');
// Menetapkan semua variabel
list($minuman, $warna, $zat) = $info;
echo "$minuman berwarna $warna dan $zat membuatnya spesial.\n";
// Menetapkan beberapa variabel saja
list($minuman, , $zat) = $info;
echo "$minuman mengandung $zat.\n";
// Atau hanya variabel ketiga saja
list( , , $zat) = $info;
echo "Saya butuh $zat!\n";
// list() tidak dapat bekerja dengan string
list($bar) = "abcde";
var_dump($bar); // NULL
?>
```
# array destructuring
Array destructuring adalah sebuah fitur yang memungkinkan kita untuk menetapkan elemen-elemen dari sebuah array ke dalam beberapa variabel sekaligus. Fitur ini diperkenalkan di PHP 7.1 dan dapat digunakan dengan sintaks list() atau []

```php
<?php
// Menggunakan sintaks list()
list($a, $b, $c) = [1, 2, 3];
echo "$a $b $c\n"; // 1 2 3

// Menggunakan sintaks []
[$a, $b, $c] = [1, 2, 3];
echo "$a $b $c\n"; // 1 2 3
?>
```