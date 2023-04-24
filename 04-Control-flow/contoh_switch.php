<?php

# contoh dengan if elseif

$hari = "senin";
if ($hari == "senin") {
    echo "hari senin";
} elseif ($hari == "selasa") {
    echo "hari selasa";
} elseif ($hari == "rabu") {
    echo "hari rabu";
} else {
    echo "hari tidak dikenal";
}

echo "<br>";
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
        echo "hari tidak dikenal";
        break;
}

echo "<br>";
# mengabungkan case 
# Karena PHP mengeksekusi switchpernyataan dari label kasus yang cocok hingga menemukan pernyataan break, 
# Anda dapat menggabungkan beberapa kasus menjadi satu.
$pesan = "";
$role = "editor";
switch ($role) {
    case "admin":
        $pesan = "anda bisa mengakses halaman admin";
        break;
    case "editor":
    case "author":
        $pesan = "anda bisa mengakses halaman author";
        break;
    default:
        $pesan = "anda tidak bisa mengakses halaman";
        break;
}
echo $pesan;