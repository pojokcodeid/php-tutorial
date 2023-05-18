# Array Map
Array map adalah sebuah fungsi bawaan di PHP yang membantu untuk memodifikasi semua elemen satu atau lebih array sesuai dengan kondisi yang ditentukan oleh pengguna dengan mudah1. Fungsi ini mengirimkan setiap elemen array ke sebuah fungsi yang dibuat oleh pengguna dan mengembalikan sebuah array dengan nilai-nilai baru yang dimodifikasi oleh fungsi tersebut2. Anda dapat memberikan satu array atau lebih ke fungsi ini2. Jumlah parameter yang diterima oleh fungsi yang dibuat oleh pengguna harus sesuai dengan jumlah array yang diberikan ke array map

```php
// Membuat sebuah fungsi untuk menghitung kuadrat dari sebuah angka
function kuadrat($n) {
  return ($n * $n);
}

// Membuat sebuah array dengan beberapa angka
$a = [1, 2, 3, 4, 5];

// Menggunakan array map untuk mengirimkan setiap elemen array ke fungsi kuadrat
$b = array_map('kuadrat', $a);

// Mencetak hasilnya
print_r($b);
```
# Array Filter
Array filter adalah sebuah fungsi bawaan di PHP yang memungkinkan Anda untuk menyaring elemen-elemen dari sebuah array menggunakan sebuah fungsi callback1. Fungsi ini mengulangi setiap nilai dalam array dan mengirimkannya ke fungsi callback. Jika fungsi callback mengembalikan nilai true, nilai saat ini dari array dimasukkan ke dalam array hasil
```php
// Membuat sebuah fungsi untuk mengecek apakah sebuah angka ganjil
function ganjil($var) {
  return $var & 1;
}

// Membuat sebuah array dengan beberapa angka
$a = [1, 2, 3, 4, 5];

// Menggunakan array filter untuk menyaring angka ganjil dari array
$b = array_filter($a, "ganjil");

// Mencetak hasilnya
print_r($b);
```

# ARRAY REDUCE
Array reduce adalah sebuah fungsi bawaan di PHP yang digunakan untuk mengurangi elemen-elemen dari sebuah array menjadi sebuah nilai tunggal dengan melakukan operasi yang ditentukan oleh sebuah fungsi callback1. Fungsi ini mengirimkan setiap nilai dalam array ke fungsi callback dan mengembalikan output sebagai nilai tunggal
```php
// Membuat sebuah fungsi untuk menjumlahkan dua angka
function jumlah($v1, $v2) {
  return $v1 + $v2;
}

// Membuat sebuah array dengan beberapa angka
$a = [10, 20, 30];

// Menggunakan array reduce untuk menghitung total dari array
$b = array_reduce($a, "jumlah", 0);

// Mencetak hasilnya
echo $b;
```
