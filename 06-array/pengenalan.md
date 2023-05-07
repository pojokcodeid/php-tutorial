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


