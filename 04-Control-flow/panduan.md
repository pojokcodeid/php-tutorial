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

# SWITCH
- Switch adalah salah satu struktur kontrol dalam bahasa pemrograman PHP yang digunakan untuk memilih dari beberapa opsi dengan nilai yang berbeda. Switch memungkinkan kita menguji ekspresi terhadap sejumlah nilai kasus dan menjalankan kode yang sesuai dengan nilai yang cocok.

Berikut adalah sintaks dasar dari switch-case pada PHP:

```php
switch (expressi){
  case value1:
    //kode yang akan dijalankan jika nilai ekspresi sama dengan value1
    break;
  
  case value2:
    //kode yang akan dijalankan jika nilai ekspresi sama dengan value2
    break;
  
  ...
  
  default:
    //kode yang akan dijalankan jika tidak ada case yang cocok dengan nilai ekspresi
}
```

Penjelasan sintaks di atas:

- `switch` : kata kunci untuk memulai struktur switch
- `expression` : nilai dari variabel atau ekspresi yang ingin diuji dalam switch
- `case value:` : kasus yang mungkin terjadi
- `break` : menunjukkan akhir dari setiap kasus dan menghentikan switch dari melanjutkan ke kasus berikutnya
- `default` : blok yang akan dieksekusi jika tidak ada kasus yang cocok dengan nilai variabel.

Perlu diingat bahwa `break` sangat penting dalam struktur switch karena tanpa `break`, switch akan menjalankan semua kode yang ada di bawah kasus yang cocok dengan nilai ekspresi, termasuk kasus-kasus yang tidak cocok.

Contoh :
```php
$hari = "Senin";
switch ($hari) {
  case "Senin":
    echo "Hari ini adalah hari Senin";
    break;
  case "Selasa":
    echo "Hari ini adalah hari Selasa";
    break;
  case "Rabu":
    echo "Hari ini adalah hari Rabu";
    break;
  default:
    echo "Hari tidak dikenal";
}
```

# Perulangan FOR
- Perulangan `for` di PHP adalah salah satu bentuk perulangan yang paling umum digunakan. Perulangan ini digunakan untuk mengulang sebuah blok kode sejumlah kali yang telah ditentukan sebelumnya.

Struktur umum dari perulangan `for` di PHP adalah sebagai berikut:

```php
for (init; condition; increment) {
  // block of code to be executed
}
```

- `init`: Menentukan nilai awal variabel penghitung (biasanya disebut `$i`). Bagian ini hanya dieksekusi sekali pada awal perulangan.
- `condition`: Menentukan kondisi untuk melanjutkan atau mengakhiri perulangan. Jika kondisi bernilai `true`, maka perulangan akan dilanjutkan. Namun, jika kondisi bernilai `false`, perulangan akan dihentikan.
- `increment`: Memperbarui variabel penghitung setelah setiap iterasi perulangan.

Contoh penggunaan perulangan `for` di PHP adalah sebagai berikut:

```php
for ($i = 0; $i < 5; $i++) {
  echo "The number is: $i <br>";
}
```

Dalam contoh di atas, perulangan akan dijalankan lima kali karena variabel penghitung (`$i`) dimulai dari nilai `0` dan diperbarui setiap kali perulangan selesai dilakukan dengan menambahkan `1`. Kondisi `$i < 5` menjaga agar perulangan hanya berjalan hingga `$i` mencapai nilai `4`. Setiap kali perulangan dijalankan, teks "The number is:" diikuti oleh nilai `$i` akan ditampilkan di browser.

Dalam perulangan `for`, variabel penghitung (`$i` dalam contoh di atas) dapat digunakan untuk melakukan tindakan perulangan, seperti mengulangi blok kode dengan jumlah iterasi yang tepat atau memperbarui nilai dari array pada setiap iterasi.

# WHILE
`while` adalah salah satu struktur kontrol di PHP yang digunakan untuk melakukan perulangan pada sebuah blok kode selama kondisi tertentu terpenuhi. Blok kode akan dieksekusi secara berulang-ulang selama kondisi yang diberikan bernilai `true`. Saat kondisi tidak terpenuhi lagi, maka program akan keluar dari loop dan melanjutkan eksekusi kode setelah loop.

Berikut adalah contoh penggunaan while loop di PHP:

```php
$num = 1;

while($num <= 10) {
    echo $num;
    $num++;
}
```

Pada contoh di atas, loop akan berjalan selama nilai `$num` kurang dari atau sama dengan 10. Setiap kali loop dijalankan, nilai `$num` akan ditampilkan dan kemudian ditambah 1 hingga nilai `$num` mencapai 11 dan kondisi tidak terpenuhi lagi.

Ketika Anda menggunakan while loop, penting untuk memastikan bahwa kondisi di dalam loop dapat tercapai false (berhenti), jika tidak, maka loop akan menjadi infinite loop dan terus berjalan tanpa henti.

alternative penulisan while
```php
<?php

while (expression):
	statement;
endwhile;
```

# DO WHILE
`Do-while` adalah salah satu jenis loop pada PHP yang digunakan untuk mengulangi sebuah blok kode selama kondisi tertentu tetap benar. Perbedaan antara `do-while` dengan `while` adalah bahwa `do-while` akan mengeksekusi blok kode minimal satu kali, bahkan jika kondisi awal tidak terpenuhi, sementara `while` tidak akan mengeksekusi blok kode sama sekali jika kondisi awal tidak terpenuhi. Berikut adalah format umum dari penggunaan do-while di PHP:

```php
do {
   // blok kode yang dieksekusi
} while (kondisi);
```

Blok kode akan dieksekusi satu kali secara otomatis, kemudian kondisi akan dievaluasi. Jika kondisi masih benar, maka blok kode akan terus diulang sampai kondisi tidak lagi benar.

# BREAK
`break` adalah perintah khusus di PHP yang digunakan untuk menghentikan loop seperti `for`, `while`, dan `do-while` sebelum iterasi selesai. 

Ketika `break` dieksekusi, loop akan segera berhenti dan kontrol akan diteruskan ke pernyataan setelah loop. Ini sangat berguna jika Anda ingin keluar dari loop secara prematur berdasarkan kondisi tertentu.

Berikut adalah contoh sederhana menggunakan break di dalam loop for:

```php
for ($i = 1; $i <= 10; $i++) {
    if ($i == 6) {
        break;
    }
    echo $i . '<br>';
}
```

Outputnya adalah:

```
1
2
3
4
5
```

Karena `break` dipanggil ketika `$i` sama dengan 6, output hanya mencetak nilai $i dari 1 hingga 5. Setelah `$i` bernilai 6, pernyataan `break` akan dieksekusi dan loop akan berakhir sebelum melanjutkan pengulangan seterusnya.

# CONTINUE
`continue` adalah sebuah perintah di PHP yang digunakan untuk melewati salah satu iterasi dalam loop (perulangan) dan melanjutkan ke iterasi berikutnya. 

Ketika `continue` dipanggil di dalam loop, maka proses iterasi saat itu akan berhenti dan program akan langsung melompat ke iterasi berikutnya. Penggunaan `continue` biasanya digunakan ketika kita ingin melakukan pengecekan suatu kondisi dalam setiap iterasi, dan jika kondisi tersebut terpenuhi maka iterasi tersebut akan dilewati.

Berikut adalah contoh penggunaan `continue` dalam loop `for`:

```php
for ($i = 1; $i <= 10; $i++) {
    if ($i % 2 == 0) {
        continue;
    }
    echo $i . " ";
}
```

Pada contoh di atas, setiap kali nilai `$i` merupakan bilangan genap, perintah `continue` akan dipanggil dan iterasi saat itu akan dilewati. Oleh karena itu, pada output dari program di atas hanya akan menampilkan bilangan ganjil dari 1 sampai 10.