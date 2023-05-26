# filter_has_var
fungsi filter_has_var() digunakan untuk memeriksa apakah variabel dari jenis input tertentu ada atau tidak. Fungsi ini memeriksa konten yang diterima oleh halaman PHP, jadi variabel harus dikirim ke halaman melalui misalnya querystring
```php
<?php
if (!filter_has_var(INPUT_GET, "email")) {
  echo("Email tidak ditemukan");
} else {
  echo("Email ditemukan");
}
?>
```
## perbedaan isset dengan filter_has_var
perbedaan antara filter_has_var dan isset di PHP adalah:

- filter_has_var tidak bekerja pada array langsung ( $_POST), tetapi pada input yang diterima oleh PHP, jadi lebih baik digunakan jika $_POST diubah oleh skrip PHP.
- filter_has_var tidak mempertimbangkan modifikasi ke array $_POST.
- filter_has_var mungkin berguna jika superglobals telah dihapus karena alasan tertentu, karena memeriksa data input asli, bukan $_GET, $_POST, $_ETC.
- filter_has_var masih mengembalikan true jika variabel kosong.
- isset mengembalikan false jika $_POST ['id'] adalah NULL; Anda harus menggunakan key_exists ('id', $_POST) untuk memiliki perilaku yang serupa dalam hal ini.
