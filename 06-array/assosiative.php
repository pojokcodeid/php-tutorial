<?php
// Membuat array assosiative yang menyimpan nama dan email
$contacts = array(
    "Ali" => "ali@gmail.com",
    "Budi" => "budi@yahoo.com",
    "Cici" => "cici@hotmail.com"
);

// Menampilkan semua elemen array
foreach ($contacts as $name => $email) {
    echo "$name : $email <br>";
}

// Menambahkan elemen baru ke array
$contacts["Dedi"] = "dedi@outlook.com";

// Menghapus elemen dari array
unset($contacts["Budi"]);

// Mengubah nilai elemen array
$contacts["Ali"] = "ali@edu.com";

// Mengurutkan array berdasarkan kunci secara menaik
ksort($contacts);

// Menampilkan semua elemen array setelah diubah
foreach ($contacts as $name => $email) {
    echo "$name : $email <br>";
}