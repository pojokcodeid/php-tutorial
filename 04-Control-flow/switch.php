<?php

# contoh dengan if else
$hari = "senin";
if ($hari == "senin") {
    echo "hari senin";
} elseif ($hari == "selasa") {
    echo "hari selasa";
} elseif ($hari == "rabu") {
    echo "hari rabu";
} else {
    echo "hari rtidak ditemukan";
}

echo '<br>';
# contoh dengan switch
switch ($hari) {
    case "senin":
        echo "hari senin";
        break;
    case "selasa":
        echo "hari selasa";
        break;
    case "rabu":
        echo "hari rabu";
        break;
    default:
        echo "hari rtidak ditemukan";
        break;
}

echo '<br>';
$pesan = "";
$role = "author";
switch ($role) {
    case "admin":
        $pesan = "Anda memiliki hak akses admin";
        break;
    case "editor":
    case "author":
        $pesan = "Anda memiliki hak akses editor";
        break;
    default:
        $pesan = "Anda tidak memiliki hak akses";
        break;
}
echo $pesan;