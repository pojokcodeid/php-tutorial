<?php

#contoh dengan pernyataan if else
$nilai = 80;
$keterangan = "";
if ($nilai >= 80) {
    $keterangan = "LULUS";
} else {
    $keterangan = "TIDAK LULUS";
}

echo $keterangan;
echo "<br>";

#contoh dengan pernyataan ternary
$keterangan = ($nilai >= 80) ? "LULUS" : "TIDAK LULUS";
echo $keterangan;
echo "<br>";

#contoh ternary steno
$path = '/home';
$url = $path ?: '/';
echo $url;
echo "<br>";

#contoh ternary berrangkai
$nilai = 80;
$grade = $nilai >= 90 ? "A"
    : ($nilai >= 80 ? "B"
        : ($nilai >= 70 ? "C"
            : ($nilai >= 60 ? "D"
                : "E")));
echo $grade;