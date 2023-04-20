# Pernyataan IF

- pernyataan IF memungkinakn kita untuk mengeksekusi pernyataan jika ekspresi bernilai true
- perintah dasarnya

```php
<?php

if ( expression )
    statement;
```

# Pernyataan IF ELSE

- pernyataan IF ELSE memungkinakn kita untuk mengeksekusi pernyataan jika ekspresi bernilai true jika false maksuk ke else
- perintah dasarnya

```php
<?php
if ( expression ) {
    // code block
} else {
    // another code block
}
```
atau :
```php
<?php
if (expression):
	statement;
else :
	statement;
endif;
```
# pernyataan IF ELSE IF
- pernyataan if elseif digunakan untuk percabangan kondisional yang memiliki banyak kondisi, PHP memeriksanya sampai mendapatkan true atau ke pengecualian else 
- perintah dasarnya
```php
<?php
if ( expression ) {
    // code block
} elseif ( expression ) {
    // another code block
} else {
    // another code block
}
```
atau :
```php
<?php
if (expression):
	statement;
elseif (expression2):
	statement;
elseif (expression3):
	statement;
endif;
```

# Ternary Operator
- Ternary operator di PHP merupakan suatu operator yang memungkinkan kita untuk mengevaluasi sebuah ekspresi dan memberikan nilai kembali berdasarkan kondisi tertentu. Ternary operator terdiri dari tiga bagian, yaitu kondisi yang akan dievaluasi, ekspresi yang dibuat jika kondisi benar dan ekspresi yang dibuat jika kondisi salah. 

- atau ternary operator adalah kependekan dari oprasi IF ELSE 
- perintah dasarnya sbb:
```php
$result = condition ? value1 : value2;
```
## ternary steno
Ternary steno adalah sebuah teknik penulisan kode singkat pada ternary operator dengan menggunakan pendekatan shorthand atau singkatan. Pendekatan ini melibatkan penghapusan tanda kurung dan mengganti kata kunci if dan else dengan simbol ? dan :.

Pada umumnya, ternary operator ditulis dalam bentuk:
```php
$variabel = (kondisi) ? nilai_jika_benar : nilai_jika_salah;
```
Dengan Ternary Steno:
```php
$kondisi ?: $nilai_default;
```
