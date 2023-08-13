<?php

// install composer
// composer require paragonie/paseto^3.1.1

require_once '../vendor/autoload.php';

use ParagonIE\Paseto\Keys\Version4\SymmetricKey;




$sharedKey = new SymmetricKey(random_bytes(32));
$data = $sharedKey->encode();
var_dump($data);
echo '<br><br>';

// kode pada data ini dari hasil code diatas
// $data = "rRFxqFMMeGgI2_jVci7uj4QsSF6F8VSxyZ2rxLdf1zY";
// $sharedKey = SymmetricKey::fromEncodedString($data);
// var_dump($sharedKey->encode());
// echo '<br>';
// Membuat data yang ingin disimpan di dalam token
$data = [
  'username' => 'alice',
  'role' => 'admin'
];

// Membuat token Paseto versi 4 local dengan data
$builder = ParagonIE\Paseto\Builder::getLocal($sharedKey)
  ->setExpiration(
    // Set it to expire in one day
    (new DateTime())->add(new DateInterval('P01D'))
  )
  ->setClaims($data);

$token = $builder->toString();

// Menampilkan token Paseto versi 4 local yang dibuat
echo "Token: " . $token . "\n";