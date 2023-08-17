<?php
use ParagonIE\Paseto\Keys\SymmetricKey;

require_once '../vendor/autoload.php';

$token = "v4.local.HizmtcjnBU7W9kX6wYq5UQX_auChOrtFarmIZKoqpQyISwHTjZGxUgfL_-WnTR_sKjyTD_SlD8vit9dyKz2AyJwI-edPoegzFBVMd6MtRXmySxMid8Fm3xAToRfkQ35rDjW1bVwlVaMrlH8nEc5Arqfy901XoRvRyeOM58VfUrxmXemyHJoCfJQ";
$data = "fqztoWo5C7xezbHVGtDXtEF_b__orYgA_GpNzZQAjIs";

$sharedKey = SymmetricKey::fromEncodedString($data);
var_dump($sharedKey->encode());
echo '<br><br>';


$parser = ParagonIE\Paseto\Parser::getLocal($sharedKey)
  ->addRule(
    new ParagonIE\Paseto\Rules\NotExpired
  );

$parsed = $parser->parse($token);

echo "Data : " . json_encode($parsed->getClaims());