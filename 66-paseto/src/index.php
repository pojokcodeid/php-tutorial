<?php
use ParagonIE\Paseto\Keys\Version4\SymmetricKey;

require_once '../vendor/autoload.php';

$sharedKey = new SymmetricKey(random_bytes(32));
$data = $sharedKey->encode();
var_dump($data);
echo '<br><br>';

# wGOysR3Aw6_KvuD84GWQyxSJGQ9VBUE92lzYAKGhc1A

$data = [
  'username' => 'pojokcode',
  'role' => 'admin'
];

$bulder = ParagonIE\Paseto\Builder::getLocal($sharedKey)
  ->setExpiration(
    (new DateTime())->add(new DateInterval('P01D'))
  )
  ->setClaims($data);

$token = $bulder->toString();

echo "Token : $token";