# isset()
Fungsi isset() di PHP adalah untuk memeriksa apakah sebuah variabel telah dideklarasikan dan tidak NULL.
Fungsi ini mengembalikan nilai true jika variabel ada dan tidak NULL, dan false jika sebaliknya
Jika ada lebih dari satu variabel yang diperiksa, maka fungsi ini akan mengembalikan true hanya jika semua variabel telah dideklarasikan dan tidak NULL

```php
<?php
$nama = "Budi";
$umur = null;

// Cek apakah variabel $nama ada dan tidak NULL
if (isset($nama)) {
  echo "Variabel nama ada dan tidak NULL";
}

// Cek apakah variabel $umur ada dan tidak NULL
if (isset($umur)) {
  echo "Variabel umur ada dan tidak NULL";
} else {
  echo "Variabel umur tidak ada atau NULL";
}

// Cek apakah variabel $nama dan $umur ada dan tidak NULL
if (isset($nama, $umur)) {
  echo "Variabel nama dan umur ada dan tidak NULL";
} else {
  echo "Variabel nama atau umur tidak ada atau NULL";
}
?>
```

# empty()
Fungsi empty() di PHP adalah untuk memeriksa apakah sebuah variabel kosong atau tidak
Fungsi ini mengembalikan nilai false jika variabel ada dan tidak kosong, dan true jika sebaliknya
Nilai-nilai berikut ini dianggap kosong oleh fungsi empty():

0
0.0
“0”
“”
NULL
FALSE
array()

contoh :
```php
<?php
$nama = "";
$umur = 20;

// Cek apakah variabel $nama kosong atau tidak
if (empty($nama)) {
  echo "Variabel nama kosong";
}

// Cek apakah variabel $umur kosong atau tidak
if (empty($umur)) {
  echo "Variabel umur kosong";
} else {
  echo "Variabel umur tidak kosong";
}

// Cek apakah variabel $nama dan $umur kosong atau tidak
if (empty($nama) && empty($umur)) {
  echo "Variabel nama dan umur kosong";
} else {
  echo "Variabel nama atau umur tidak kosong";
}
?>
```

# is_null()
Fungsi is_null() di PHP adalah untuk mengetahui apakah sebuah variabel atau nilai adalah NULL atau tidak. 
Fungsi ini mengembalikan nilai boolean true jika variabel atau nilai adalah NULL, dan false jika sebaliknya. 
Fungsi ini berbeda dengan isset(), yang merupakan konstruksi bahasa yang mengecek apakah sebuah variabel ada dan tidak NULL. 
Contoh penggunaan fungsi is_null() adalah sebagai berikut:

```php
<?php
$nama = null;
$umur = 20;

// Cek apakah variabel $nama adalah NULL atau tidak
if (is_null($nama)) {
  echo "Variabel nama adalah NULL";
}

// Cek apakah variabel $umur adalah NULL atau tidak
if (is_null($umur)) {
  echo "Variabel umur adalah NULL";
} else {
  echo "Variabel umur bukan NULL";
}

// Cek apakah nilai dari fungsi strlen($nama) adalah NULL atau tidak
if (is_null(strlen($nama))) {
  echo "Nilai dari fungsi strlen(nama) adalah NULL";
} else {
  echo "Nilai dari fungsi strlen(nama) bukan NULL";
}
?>
```