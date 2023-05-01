# FUNCTION
PHP Function adalah sebuah blok kode yang dapat dipanggil dan dieksekusi di berbagai bagian dari program PHP. Function ini bisa dikatakan sebagai subprogram atau mini program yang mengandung serangkaian instruksi untuk menyelesaikan tugas tertentu dalam program utama.

Function sangat berguna dalam menghindari pengulangan kode. Daripada menulis kode yang sama berulang kali, cukup tulis function sekali dan panggil kembali setiap kali dibutuhkan. Selain itu, function juga memudahkan pemeliharaan kode karena jika ada kesalahan dalam function, hanya perlu diperbaiki pada satu tempat saja.

Berikut adalah contoh sintaks dasar untuk pembuatan function di PHP:

```php
function nama_function() {
   // kode yang akan dijalankan
}
```

Untuk memanggil function pada program utama, bisa menggunakan sintaks berikut:

```php
nama_function();
```

Namun, terkadang function juga membutuhkan argumen atau parameter untuk mendapatkan nilai masukan yang diperlukan untuk menyelesaikan tugasnya. Sintaks untuk deklarasi parameter function sebagai berikut:

```php
function nama_function($parameter1, $parameter2) {
   // kode yang akan dijalankan
}
```

Memanggil function dengan parameter seperti ini:

```php
nama_function(nilai_parameter1, nilai_parameter2);
```

Itulah penjelasan singkat tentang PHP Function. Function merupakan fitur yang sangat penting dalam membuat program PHP yang efisien dan mudah dipelihara.

NOTE: untuk memisahkan parameter lebih dari satu gunakan tnda koma

## Function Pass By Value
Dalam PHP, parameter fungsi dapat dikirimkan menggunakan dua metode yaitu "pass by value" dan "pass by reference". Pada metode "pass by value", argument atau nilai dari variabel yang diberikan ketika memanggil fungsi akan disalin (copy) ke dalam parameter fungsi. 

Jadi pada saat fungsi dipanggil, nilai asli dari variabel tidak akan berubah, karena hanya dilakukan pengiriman salinan nilainya saja, bukan sendiri variabel itu sendiri.

Berikut adalah contoh sederhana penggunaan "pass by value" di PHP:

```php
function tambah($a, $b) {
  $hasil = $a + $b;
  return $hasil;
}

$x = 5;
$y = 10;

$hasilTambah = tambah($x, $y); // Memanggil fungsi tambah() dengan argumen $x dan $y

echo "Hasil penjumlahan dari $x dan $y adalah: $hasilTambah"; // Output: Hasil penjumlahan dari 5 dan 10 adalah: 15
```

Pada contoh di atas, kita memberikan dua argumen `$x` dan `$y` ke dalam fungsi `tambah()`, namun karena digunakan metode "pass by value", maka fungsi hanya menerima dua nilai tersebut sebagai salinan, dan nilai asli dari `$x` dan `$y` tidak berubah.

Dalam hal ini, metode "pass by value" sangat berguna untuk menghindari perubahan nilai asli dari variabel atau objek yang dikirimkan ke fungsi jika kita tidak ingin mengubah nilainya secara langsung.

Namun, perlunya pengiriman salinan nilai bisa menambah beban memori karna ketika kita menggunakan variabel yang bernilai besar, akan terjadi pengulangan data sehingga akan memperbesar ukuran memori yang dibutuhkan oleh aplikasi.

# Function Pass By Reference
Dalam PHP, selain metode "pass by value", kita juga bisa menggunakan metode "pass by reference" untuk mengirimkan parameter ke dalam fungsi. Pada metode ini, bukan nilai variabel yang disalin ke dalam parameter fungsi, melainkan alamat memori (pointer) dari variabel tersebut yang digunakan oleh fungsi. Dengan cara ini, jika terjadi perubahan pada variabel di dalam fungsi, maka nilai asli dari variabel tersebut juga akan berubah.

Berikut adalah contoh penggunaan "pass by reference" di PHP:

```php
function tambah(&$a, &$b) {
  $a++;
  $b++;
  $hasil = $a + $b;
  return $hasil;
}

$x = 5;
$y = 10;

$hasilTambah = tambah($x, $y); // Memanggil fungsi tambah() dengan argumen $x dan $y

echo "Hasil penjumlahan dari $x dan $y adalah: $hasilTambah"; // Output: Hasil penjumlahan dari 6 dan 11 adalah: 17
```

Pada contoh di atas, kita menggunakan karakter `&` untuk menandai bahwa `$a` dan `$b` harus dikirimkan sebagai "pass by reference". Jika terjadi perubahan pada nilai `$a` dan `$b` di dalam fungsi, maka nilai asli dari variabel `$x` dan `$y` juga akan berubah.

Namun, penggunaan "pass by reference" juga bisa menyebabkan masalah jika tidak digunakan dengan benar. Oleh karena itu, kita harus berhati-hati dalam menggunakan metode ini, terutama jika aplikasi yang kita bangun memiliki kompleksitas yang tinggi.

# Argumenat Bernama
Sejak PHP 8.0, Anda dapat menggunakan argumen bernama untuk fungsi. Argumen bernama memungkinkan Anda meneruskan argumen ke fungsi berdasarkan nama parameter daripada posisi parameter.