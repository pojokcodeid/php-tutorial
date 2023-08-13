<?php

require_once '../vendor/autoload.php';

use ParagonIE\Paseto\Keys\Version4\SymmetricKey;

// ambil key dan token dari hasil index.php
$token = "v4.local.Ma_ljZX7r0EIgg9kaaI29PWMCcIIz7GC8w71MpmZSoaxP9KdjC447r9TzYfxG8p73JPkjR-aXbX6RqHqFTX_vy17qnHGeXwqmJ_CisPCTlKE20jplyL1Lg7QRwrzD9WS5abShii8cU-35ONfQbuxQ467cE6uBSnWDpxF5xkfablZ20RT1w";
$data = "rRFxqFMMeGgI2_jVci7uj4QsSF6F8VSxyZ2rxLdf1zY";
$sharedKey = SymmetricKey::fromEncodedString($data);
var_dump($sharedKey->encode());
echo '<br><br>';

// Memverifikasi token Paseto versi 4 local dengan kunci yang sama
$parser = ParagonIE\Paseto\Parser::getLocal($sharedKey)
  ->addRule(
    new ParagonIE\Paseto\Rules\NotExpired
  );

$parsed = $parser->parse($token);
// Menampilkan data yang ada di dalam token Paseto versi 4 local
echo "Data: " . json_encode($parsed->getClaims()) . "\n";