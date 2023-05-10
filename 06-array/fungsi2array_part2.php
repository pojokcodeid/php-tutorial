<?php

function cetak($array)
{
    echo "<pre>";
    print_r($array);
    echo "</pre>";
    echo '<br>';
}

$angka = [10, 20, 30];
$angka = array_keys($angka);
cetak($angka);

$numbers = [10, 20, 30];
$keys = array_keys($numbers, 20);
cetak($keys);

$array = array("volo" => "XC90", "BMW" => "X5", "Toyota" => "Yaris");
$hasilnya = array_keys($array);
cetak($hasilnya);

$user = [
    "username" => "admin",
    "password" => "admin",
    "email" => "admin@admin",
    "is_active" => "1"
];
$properties = array_keys($user);
cetak($properties);

$properties2 = array_keys($user, 1);
cetak($properties2);

function array_keys_by(array $array, callable $callback): array
{
    $keys = [];
    foreach ($array as $key => $value) {
        if ($callback($key)) {
            $keys[] = $key;
        }
    }
    return $keys;
}

$permission = [
    'edit_post' => 1,
    'delete_post' => 2,
    'publish_post' => 3,
    'approve' => 4
];
$keys = array_keys_by($permission, function ($key) {
    return strpos($key, 'post');
});
cetak($keys);

# array_key_exists

$a = array("volvo" => "XC90", "BMW" => "X5", "Toyota" => "Yaris");
if (array_key_exists("volvo", $a)) {
    echo "Kunci ada !";
} else {
    echo "Kunci tidak ada !";
}
echo '<br>';

# array_key_exists vs isset
$roles = [
    'admin' => 1,
    'user' => 2,
    'guest' => 3,
    'approver' => 4
];
var_dump(isset($roles['admin']));
echo '<br>';
var_dump(array_key_exists('admin', $roles));
echo '<br>';
var_dump(isset($roles['subscriber']));
echo '<br>';
var_dump(array_key_exists('subscriber', $roles));
echo '<br>';

$post = [
    'title' => 'PHP array_keys_exists',
    'thubnail' => null
];
var_dump(array_key_exists('thubnail', $post));
var_dump(isset($post['thubnail']));