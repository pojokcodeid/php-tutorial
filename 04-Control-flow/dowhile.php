<?php

$i = 0;
do {
    echo "Nomor :" . $i . "<br>";
    $i++;
} while ($i <= 5);

$nama = "";
$email = "";
$password = "";
$is_browser = false;

if ($is_browser) {
    do {
        $nama = readline("Masukan Nama :");
        if (strlen($nama) < 3) {
            echo "Nama harus lebih dari 3 karakter";
        }
    } while (strlen($nama) < 3);
    do {
        $email = readline("Masikan Email :");
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Email tidak valid";
        }
    } while (!filter_var($email, FILTER_VALIDATE_EMAIL));
    do {
        $password = readline("Masukan Password :");
        if (strlen($password) < 8) {
            echo "Password harus lebih dari 8 karakter";
        }
    } while (strlen($password) < 8);

    echo "\n informasi : \n";
    echo "Nama : $nama \n";
    echo "Email : $email \n";
    echo "Password : $password \n";
}

$i = 10;
do {
    echo $i . '<br>';
    $i--;
} while ($i >= 0);