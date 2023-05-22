# include
Fungsi include di PHP adalah untuk menyertakan isi dari satu file PHP ke dalam file PHP lainnya

penulisannya :
```php
include 'path_to_file';
```
contoh :
```php
<?php 

// index.php file
include 'functions.php';
```

# include_once
Fungsi include_once di PHP adalah untuk menyertakan isi dari satu file PHP ke dalam file PHP lainnya, tetapi hanya sekali saja
Jika file yang disertakan sudah pernah disertakan sebelumnya, fungsi ini tidak akan menyertakannya lagi, dan mengembalikan nilai true12. Fungsi ini berguna untuk mencegah masalah seperti redefinisi fungsi, penugasan ulang nilai variabel, dll
penulisannya :
```php
include_once 'path_to_file';
```

# Requere
require memuat kode dari file ke dalam skrip dan mengeksekusi kode itu.
```php
require 'path_to_file';
```
Konstruksinya requir esama dengan include konstruk kecuali jika gagal memuat file, itu akan mengeluarkan kesalahan fatal dan menghentikan skrip, sedangkan konstruk include hanya mengeluarkan peringatan dan mengizinkan skrip untuk melanjutkan.

Dalam praktiknya, Anda sering menggunakan require konstruksi untuk memuat kode dari pustaka. Karena pustaka berisi fungsi yang diperlukan untuk mengeksekusi skrip, lebih baik menggunakan konstruksi require daripada include konstruksi.

# require_once
PHP require_once adalah mitra dari include_once, require_once mengeluarkan kesalahan jika gagal memuat file. Juga, require_once tidak akan memuat file lagi jika file telah dimuat.
```php
require_once 'path_to_file';
```

# PHP __DIR__
PHP DIR adalah sebuah konstanta ajaib yang mengembalikan direktori dari file yang sedang dijalankan. Konstanta ini tersedia sejak PHP versi 5.3, dan sama dengan menggunakan dirname (FILE).1 Dalam banyak kasus, DIR digunakan untuk menyertakan file lain dari file yang disertakan.

.
├── inc
│   ├── footer.php
│   └── header.php
└── index.php

Anda bisa menggunakan DIR di dalam file header.php untuk menyertakan file footer.php seperti ini:
```php
<?php include __DIR__ . "/footer.php"; ?>
```
Keuntungan menggunakan DIR adalah Anda tidak perlu menyesuaikan jalur relatif dari file yang disertakan setiap kali Anda menyertakan file header.php di file lain. Misalnya, jika Anda memiliki file index.php di dalam subdirektori admin, Anda bisa menyertakan file header.php seperti ini:
```php
<?php include "../inc/header.php"; ?>
```
Tanpa perlu mengubah kode di dalam file header.php

-- contoh 2
.
├── admin
│   └── dashboard
│       └── index.php
├── config
│   └── app.php
├── inc
│   ├── footer.php
│   └── header.php
└── public
    └── index.php

# Membuat Variable dari Variable Lainnya
PHP Variable Variables adalah fitur PHP yang memungkinkan kita untuk menggunakan nilai dari sebuah variabel sebagai nama dari variabel lain
```php
<?php
$my_var= 'title';
$$my_var = 'PHP variable variables';

echo $title;
```