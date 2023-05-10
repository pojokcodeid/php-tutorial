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
```php
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
```
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

 