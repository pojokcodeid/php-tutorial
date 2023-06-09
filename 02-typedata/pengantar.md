# Pengenalan Type Data PHP

Di dalam bahasa pemrograman PHP, terdapat beberapa tipe data yang digunakan untuk menyimpan nilai atau informasi. Berikut adalah beberapa tipe data di PHP:

1. Integer: Tipe data integer digunakan untuk menyimpan bilangan bulat. Contohnya: $angka = 10;
2. Float atau Double: Tipe data float atau double digunakan untuk menyimpan bilangan pecahan. Contohnya: $angka = 3.14;
3. String: Tipe data string digunakan untuk menyimpan teks atau karakter. Contohnya: $teks = "Ini adalah sebuah kalimat";
4. Boolean: Tipe data boolean digunakan untuk menyimpan nilai kebenaran (true atau false). Contohnya: $nilai = true;
5. Array: Tipe data array digunakan untuk menyimpan beberapa nilai dalam satu variabel. Contohnya:

```php
	$buah = array("Apel", "Jeruk", "Mangga");
	$bulan = ["Januari", "Februari", "Maret"];
```

6. Object: Tipe data object digunakan untuk membuat suatu kelas atau objek. Contohnya:

```php
	class Mobil {
		public $merk;
		public $warna;
	}

	$mobil_saya = new Mobil();
	$mobil_saya->merk = "Toyota";
	$mobil_saya->warna = "Hitam";
```

7.NULL: Tipe data null digunakan untuk menyimpan nilai kosong atau tidak ada nilai. Contohnya: $nilai = null;
8.Resource: Tipe data resource digunakan untuk menyimpan referensi ke suatu sumber daya eksternal seperti file atau database. Contohnya:

```php
	$file = fopen("data.txt", "r");
	$koneksi = mysqli_connect("localhost", "user", "password", "database");
```

- jenis menentukan jumlah memori yang dialokasikan ke nilai yang terkait.type juga menentukan operasi yang dapat dilakukan.
- PHP memiliki 10 tipe primitif, 4 tipe gabungan dan 2 tipe khusus
  - lihat img bagain struktur

1. Boolean

- Tipe data boolean di PHP digunakan untuk mewakili nilai kebenaran (true atau false). Contohnya, saat kita ingin mengecek apakah suatu variabel memiliki nilai tertentu atau tidak, kita bisa menggunakan tipe data boolean ini.
- Bolean dapat berupa true atau false.
- kata kunci true atau false tidak case sensitive.
- Nilai di konversi ke boolean yang ber nilai false
  - kalta kunci false
  - bilangan bulat 0 atau -0
  - angka floting point (0,0) atau -0,0 (nol).
  - String kosong ( '' ) dan String "0"
  - Nilai NULL
  - Array kosong [] atau array()
  - Objek SimpleXML yang dibuat dari elemen kosong tanpa atribut.
- selainnya akan di anggap nilai true
  Contoh penggunaannya:

```php
  $nilai = 80;
  $hasil_ujian = ($nilai >= 70); // $hasil_ujian akan bernilai true

  if($hasil_ujian){
    echo "Selamat, kamu lulus!";
  } else {
    echo "Maaf, kamu tidak lulus.";
  }
```

Pada contoh di atas, variable $hasil_ujian akan bernilai true karena variabel $nilai memiliki nilai lebih besar atau sama dengan 70. Sehingga pada outputnya, program akan mencetak teks "Selamat, kamu lulus!".

Namun jika nilai dari $nilai kurang dari 70, variabel $hasil_ujian akan bernilai false, dan program akan mencetak teks "Maaf, kamu tidak lulus.".

2. Int

- int adalah bilangan bulat seperti -3, -2, -1, 0, 1, 2, 3…
- Biasanya, bilangan bulat memiliki rentang dari -2.147.438.648 hingga 2.147.483.647. Ini setara dengan 32 bit
- PHP_INT_SIZE digunakan mendapatkan ukuran bilangan bulat.
- PHP_INT_MIN dan PHP_INT_MAX untuk mendapatkan nilai bilangan bulat minimum dan maksimum.
- untuk sparator kita bisa mengunakan ( _ ) contoh 1_000_000

Bilangan oktal terdiri dari nol di depan dan urutan angka dari 0 sampai 7. Seperti bilangan desimal, bilangan oktal dapat memiliki tanda plus (+) atau minus (-). Misalnya:
+010 // decimal 8
Bilangan heksadesimal terdiri dari awalan 0xdan urutan angka (0-9) atau huruf (AF). Hurufnya bisa huruf kecil atau huruf besar. Dengan konvensi, huruf ditulis dalam huruf besar.
0x10 // decimal 16
0xFF // decimal 255

Fungsi is_int() bawaan mengembalikan truejika nilai (atau variabel ) adalah bilangan bulat.
$amount = 100;
    echo is_int($amount);

3. float

- Angka floating-point mewakili nilai numerik dengan angka desimal.
- PHP mengenali bilanan float dengan contoh seperti ini 1.25 (ada nilai dibelakang koma)
  contoh :
  0.125E1 // 0.125 \* 10^1 or 1.25
- sama dengan int, float juga bisa menggunakan sparator 1_234_457.89
- contoh :

Karena komputer tidak dapat merepresentasikan angka dibelakang koma dengan tepat tapi memperkirakan yang mendekali
misalnya 0,1 + 0,1 + 0,1 adalah 0,299999999…, bukan 0,3.
Artinya, Anda harus berhati-hati saat membandingkan dua bilangan denan dibelakang koma menggunakan operator ==.

4. String

- string adalah urutan karakter.
- PHP memberi Anda empat cara untuk mendefinisikan string literal
  1. kutipan tunggal,
  2. kutipan ganda,
  3. heredoc, dan -> di pelajari berikutnya
  4. sintaks nowdoc . -> di pelajari berikutnya

5. null

- null adalah type data khusus di PHP.
- type null hanya memiliki nilai null saja.
- null adalah nilai kosong atau tidak ada nilai.
  contoh :
  ```
  <?php
  $email=null;
  var_dump($email);
  ```
- null tidak case sensitive.

6. casting

Casting di PHP adalah konversi nilai dari satu tipe data ke tipe data lainnya. Casting dapat dilakukan untuk mengubah tipe data variabel sesuai dengan kebutuhan program.
Ada beberapa jenis casting yang umum digunakan di PHP, yaitu:

1. Implicit Casting: Jenis casting ini terjadi secara otomatis ketika PHP mengubah tipe data sebuah variabel secara implisit. Contohnya, ketika kita melakukan operasi aritmatika pada bilangan bulat dan bilangan desimal, PHP akan secara otomatis mengkonversi tipe data bilangan bulat menjadi bilangan desimal supaya hasil akhirnya tepat.

2. Explicit Casting: Jenis casting ini dilakukan secara eksplisit oleh pengguna dengan menggunakan fungsi-fungsi khusus seperti (int), (float), (string), (bool), dll. Contohnya, jika kita ingin mengkonversi tipe data variabel $angka dari integer ke float, kita dapat menggunakan syntax (float) $angka.

  contoh :
  ```
  <?php
  $nilai = 100;
  $nilai = (string)$nilai;
  var_dump($nilai);
  ```
7. Juggling Type
PHP adalah bahasa pemrograman yang diketik secara longgar. Ini berarti bahwa ketika Anda mendefinisikan variabel , Anda tidak perlu mendeklarasikan tipenya . Secara internal, PHP akan menentukan tipe berdasarkan konteks di mana Anda menggunakan variabel.

Juggling type pada PHP adalah konversi otomatis dari tipe data dalam sebuah ekspresi menjadi tipe data yang berbeda. Contohnya adalah saat kita ingin menguji apakah variabel bernilai integer 0 atau string kosong, maka kita dapat menggunakan perbandingan == (loose equality) karena PHP akan secara otomatis membandingkan keduanya sebagai nilai boolean false.

Contoh kode:
```
$num = 0;
$str = "";

if ($num == $str) {
  echo "Equal";
} else {
  echo "Not equal";
}
```

Outputnya adalah "Equal", karena PHP secara otomatis mengkonversi 0 menjadi false dan string kosong juga dianggap sebagai false ketika dibandingkan dengan operator ==. Penting untuk dipahami bahwa penggunaan juggling type pada PHP dapat membingungkan dalam beberapa kasus dan sebaiknya digunakan dengan hati-hati.
