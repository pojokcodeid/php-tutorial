# Pengenalan Type Data PHP
- jenis menentukan jumlah memori yang dialokasikan ke nilai yang terkait.type juga menentukan operasi yang dapat dilakukan.
- PHP memiliki 10 tipe primitif, 4 tipe gabungan dan 2 tipe khusus
    - lihat img bagain struktur

1. Boolean
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

2. Int
- int adalah bilangan bulat seperti -3, -2, -1, 0, 1, 2, 3…
- Biasanya, bilangan bulat memiliki rentang dari -2.147.438.648 hingga 2.147.483.647. Ini setara dengan 32 bit
- PHP_INT_SIZE digunakan mendapatkan ukuran bilangan bulat.
- PHP_INT_MINdan PHP_INT_MAXuntuk mendapatkan nilai bilangan bulat minimum dan maksimum.
- untuk sparator kita bisa mengunakan ( _ ) contoh 1_000_000

Bilangan oktal terdiri dari nol di depan dan urutan angka dari 0 sampai 7. Seperti bilangan desimal, bilangan oktal dapat memiliki tanda plus (+) atau minus (-). Misalnya:
    +010 // decimal 8
Bilangan heksadesimal terdiri dari awalan 0xdan urutan angka (0-9) atau huruf (AF). Hurufnya bisa huruf kecil atau huruf besar. Dengan konvensi, huruf ditulis dalam huruf besar.
    0x10 // decimal 16
    0xFF // decimal 255

Fungsi is_int()bawaan mengembalikan truejika nilai (atau variabel ) adalah bilangan bulat. 
    $amount = 100;
    echo is_int($amount);

3. float
- Angka floating-point mewakili nilai numerik dengan angka desimal.
- PHP mengenali bilanan float dengan contoh seperti ini 1.25 (ada nilai dibelakang koma)
contoh :
    0.125E1 // 0.125 * 10^1 or 1.25
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




