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