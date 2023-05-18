<?php
$nama = "Pojok Code";
var_dump(isset($nama));
echo "<br>";


$nama = "budi";
$umar = null;

if (isset($nama)) {
    echo "variable nama ada dan tidak null <br>";
}

if (isset($umar)) {
    echo "variable umar ada dan tidak null <br>";
} else {
    echo "variable umar tidak ada atau isinya null <br>";
}

if (isset($nama, $umar)) {
    echo "variable nama dan umar ada <br>";
} else {
    echo "variable nama dan umar tidak ada <br>";
}

$count = 0;
unset($count);
var_dump(isset($count));
echo "<br>";

$color = ['primary' => 'blue'];
var_dump(isset($color['primary']));
echo "<br>";
var_dump(isset($color['secondary']));
echo "<br>";

$message = 'Hello';
var_dump(isset($message[0]));
echo "<br>";

$nama = "";
$umur = 20;

if (empty($nama)) {
    echo "nama tidak boleh kosong <br>";
}

if (empty($umur)) {
    echo "umur tidak boleh kosong <br>";
} else {
    echo "umur sudah terisi <br>";
}

if (empty($nama) && empty($umur)) {
    echo "nama dan umur tidak boleh kosong <br>";
} else {
    echo "nama dan umur sudah terisi <br>";
}

$nama = null;
$umur = 20;
if (is_null($nama)) {
    echo "isi variable nama adalah null <br>";
}

if (is_null($umur)) {
    echo "isi variable umur adalah null <br>";
} else {
    echo "isi variable umur sudah terisi <br>";
}

function isnull($v): bool
{
    return is_null($v);
}

echo isnull($umur);

# perbadingan is_null dan ===
function echo_bool(string $title, bool $v): void
{
    echo $title, "\t", $v === true ? 'true' : 'false', PHP_EOL;
    echo '<br>';
}

echo_bool('null == false:', null == false);
echo_bool('null == 0:', null == 0);
echo_bool('null == 0.0:', null == 0.0);
echo_bool('null =="0":', null == false);
echo_bool('null == "":', null == '');
echo_bool('null == []:', null == []);
echo_bool('null == null:', null == null);

# sekarang gunakan is null
function echo_bool2(string $title, bool $v): void
{
    echo $title, "\t", $v === true ? 'true' : 'false', PHP_EOL;
    echo '<br>';
}

echo_bool2('is_null(false):', is_null(false));
echo_bool2('is_null(0):', is_null(0));
echo_bool2('is_null(0.0)', is_null(0.0));
echo_bool2('is_null("0"):', is_null("0"));
echo_bool2('is_null(""):', is_null(""));
echo_bool2('is_null([]):', is_null([]));
echo_bool2('is_null(null):', is_null(null));