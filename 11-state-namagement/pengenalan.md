# PHP Cookie
Cookie PHP adalah mekanisme untuk menyimpan data di browser pengguna dan melacak atau mengidentifikasi pengguna yang kembali. Anda dapat membuat cookie menggunakan fungsi setcookie() atau setrawcookie(). Cookie adalah bagian dari header HTTP, jadi setcookie() harus dipanggil sebelum ada output yang dikirim ke browser. Anda dapat menggunakan fungsi buffering output untuk menunda output skrip sampai Anda memutuskan apakah akan membuat cookie atau mengirim header.

Contoh kode untuk membuat cookie bernama "user" dengan nilai "Alex Porter" yang akan kadaluarsa setelah 30 hari adalah sebagai berikut¹:

```php
<?php
$cookie_name = "user";
$cookie_value = "Pojok Code";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
?>
```

Untuk mengambil nilai cookie, Anda dapat menggunakan variabel global $_COOKIE. Contoh kode untuk menampilkan nilai cookie "user" adalah sebagai berikut¹:

```php
<?php
if(!isset($_COOKIE[$cookie_name])) {
  echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
  echo "Cookie '" . $cookie_name . "' is set!<br>";
  echo "Value is: " . $_COOKIE[$cookie_name];
}
?>
```

Untuk menghapus cookie, Anda dapat menggunakan fungsi setcookie() dengan tanggal kadaluarsa di masa lalu. Contoh kode untuk menghapus cookie "user" adalah sebagai berikut:

```php
<?php
// set the expiration date to one hour ago
setcookie("user", "", time() - 3600);
?>
```

Source: 
https://www.php.net/manual/en/features.cookies.php.
https://www.php.net/manual/en/reserved.variables.cookies.php.

# SESSION
PHP sessions adalah cara untuk menyimpan informasi (dalam variabel) yang dapat digunakan di beberapa halaman. Berbeda dengan cookie, informasi tidak disimpan di komputer pengguna1. PHP sessions memungkinkan Anda untuk melacak pengguna dan menyimpan data yang berkaitan dengan mereka, seperti nama pengguna, warna favorit, dll2. Untuk memulai sesi PHP, Anda perlu menggunakan fungsi session_start() dan mengatur variabel sesi dengan variabel global $_SESSION1. Anda juga dapat mengubah, menghapus, atau menghancurkan variabel sesi sesuai kebutuhan
cara memnbuat session:
```php
session_start();
```
Di mana PHP menyimpan data sesi ?
Secara default, PHP menyimpan data sesi dalam file sementara di server web. Anda dapat menemukan lokasi file sementara menggunakan direktif  session.save_pathdi file konfigurasi PHP.
```php
echo session_save_path();
```

Mengakses data sesi
Tidak seperti cookie, Anda dapat menyimpan data apa pun dalam sesi tersebut. Untuk menyimpan data dalam sesi, Anda menetapkan kunci dan nilai dalam $_SESSIONarray superglobal.