# Fungsi file_exists()
Fungsi **file_exists()** pada PHP adalah fungsi bawaan yang digunakan untuk memeriksa apakah file atau direktori ada atau tidak. Jalur file atau direktori yang ingin Anda periksa dilewatkan sebagai parameter ke fungsi file_exists() yang mengembalikan True jika berhasil dan False jika gagal.

Contoh penggunaan fungsi file_exists() adalah sebagai berikut:

```php
<?php
$filename = '/path/to/foo.txt';
if (file_exists($filename)) {
    echo "File $filename ada";
} else {
    echo "File $filename tidak ada";
}
?>
```

Output:

```
File /path/to/foo.txt ada
```

atau

```
File /path/to/foo.txt tidak ada
```

# fungsi is_file()
Fungsi **is_file()** di PHP adalah fungsi yang digunakan untuk memeriksa apakah suatu file benar-benar ada dan bukan direktori¹. Fungsi ini mengembalikan nilai **true** jika file ada dan **false** jika tidak².

Contoh penggunaan fungsi **is_file()** adalah sebagai berikut:

```php
<?php
$filename = "buah.txt";
if (is_file($filename)) {
  echo "File $filename ada";
} else {
  echo "File $filename tidak ada";
}
?>
```

Output:

```
File buah.txt ada
```

# fungsi is_readable()
Fungsi **is_readable()** di PHP adalah fungsi yang digunakan untuk memeriksa apakah nama file yang ditentukan dapat dibaca. Fungsi ini mengembalikan nilai **true** jika file dapat dibaca dan **false** jika tidak.

Contoh penggunaan fungsi **is_readable()** adalah sebagai berikut:

```php
<?php
$file = "test.txt";
if (is_readable($file)) {
  echo "$file dapat dibaca";
} else {
  echo "$file tidak dapat dibaca";
}
?>
```

Output:

```
test.txt dapat dibaca
```

# Fungsi is_writable()
Fungsi **is_writable()** di PHP adalah fungsi yang digunakan untuk memeriksa apakah nama file yang ditentukan dapat ditulis¹². Fungsi ini mengembalikan nilai **true** jika file dapat ditulis dan **false** jika tidak².

Contoh penggunaan fungsi **is_writable()** adalah sebagai berikut:

```php
<?php
$file = "test.txt";
if (is_writable($file)) {
  echo "$file dapat ditulis";
} else {
  echo "$file tidak dapat ditulis";
}
?>
```

Output:

```
test.txt dapat ditulis
```
