# assignment-operator

Assignment operator di PHP adalah simbol yang digunakan untuk memberikan nilai pada suatu variabel. Operator ini dimulai dengan tanda sama dengan (=) dan ditempatkan di antara variabel yang nilainya akan diberikan dan nilai itu sendiri. Contohnya adalah:

```php
$nama = "John";
$umur = 25;
```
## Operator penugasan aritmatika

$counter = 1;
$counter = $counter + 1;

$counter = 1;
$counter += 1;

| Operator |  Example  |   Equivalent  |    Operation   |
|:--------:|:---------:|:-------------:|:--------------:|
| +=       | $x += $y  | $x = $x + $y  | Addition       |
| -=       | $x -= $y  | $x = $x – $y  | Subtraction    |
| *=       | $x *= $y  | $x = $x * $y  | Multiplication |
| /=       | $x /= $y  | $x = $x / $y  | Division       |
| %=       | $x %= $y  | $x = $x % $y  | Modulus        |
| **=      | $z **= $y | $x = $x ** $y | Exponentiation |

## Operator penugasan gabungan
HP menggunakan operator penggabungan (.) untuk menggabungkan dua string

```php
<?php 

$greeting = 'Hello ';
$name = 'John';

$greeting = $greeting . $name;

echo $greeting;
```

```php
<?php 

$greeting = 'Hello ';
$name = 'John';

$greeting .= $name;

echo $greeting;
```
# Operator perbandingan
Operator pembanding memungkinkan untuk membandingkan dua nilai dan mengembalikan true jika perbandingannya benar dan falsesebaliknya.

| Operator |             Nama             |                                                               Keterangan                                                               |
|:--------:|:----------------------------:|:--------------------------------------------------------------------------------------------------------------------------------------:|
| ==       | Sama dengan                  | Kembalikan  truejika kedua operan sama; jika tidak, ia mengembalikan  false.                                                           |
| !=, <>   | Tidak sama dengan            | Kembalikan truejika kedua operan sama; jika tidak, ia mengembalikan false.                                                             |
| ===      | Sama dengan                  | Kembali  truejika kedua operan memiliki tipe data yang sama dan sama; jika tidak, ia mengembalikan  false.                             |
| !==      | Tidak identik dengan         | Kembalikan  truejika kedua operan tidak sama atau tidak memiliki tipe data yang sama; jika tidak, ia mengembalikan false.              |
| >        | Lebih besar dari             | Kembalikan  truejika operan di sebelah kiri lebih besar dari operan di sebelah kanan; jika tidak, ia mengembalikan  false.             |
| >=       | Lebih dari atau sama dengan  | Kembalikan  truejika operan di sebelah kiri lebih besar atau sama dengan operan di sebelah kanan; jika tidak, ia mengembalikan  false. |
| <        | Kurang dari                  | Kembalikan  truejika operan di sebelah kiri lebih kecil dari operan di sebelah kanan; jika tidak, ia mengembalikan  false.             |
| <=       | Kurang dari atau sama dengan | Kembali  truejika operan di sebelah kiri kurang dari atau sama dengan operan di sebelah kanan; jika tidak, ia mengembalikan  false.    |

# Operator Logika
## Operator AND disimbolkan (&&)
- operator and menerima dua operan dan mengmabalikan true jika semua operan tersebut benar, selainnya akan false.
- perintah dasarnya 
```php
expresion1 and expresion2
```
true  and true  = true
true  and false = fasle
false and true  = false
false and false = false

## operator OR disimbolkan (||)
- operator or menerima dua operan dan mengembalikan true jika salah satu operan tersebut benar, jika keduanya false baru menghasilkan false.
- perintah dasarnya 
```php
expresion1 or expresion2
```
true  or true  = true
true  or false = true
false or true  = true
false or false = false

# operator NOT (!)
- Berbeda dengan operator logika AND dan OR yang menerima dua operan, operator NOT logikal hanya menerima satu operan dan meniadakan operan tersebut.
- akan berkebalikan dari nilai operannya.
- not expression
- ! expression

true  -> false
false -> true


