<?php

require_once '../vendor/autoload.php';

use ParagonIE\Paserk\Operations\Key\SealingSecretKey;
use ParagonIE\Paseto\Builder;
use ParagonIE\Paseto\Keys\SymmetricKey;
use ParagonIE\Paseto\Protocol\Version4;
use ParagonIE\Paserk\Operations\Key\SealingPublicKey;
use ParagonIE\Paserk\Types\Seal;
use ParagonIE\Paserk\Types\Lid;
use ParagonIE\Paseto\Parser as PasetoParser;
use ParagonIE\Paseto\ProtocolCollection;

$version = new Version4();

// First, you need a sealing keypair.

$sealingSecret = ParagonIE\Paserk\Operations\Key\SealingSecretKey::generate();
$sealingPublic = $sealingSecret->getPublicKey();
var_dump($sealingSecret->encode());
echo '<br>';
var_dump($sealingPublic->encode());
echo '<br><br>';

// $sealingPublic = SealingPublicKey::fromEncodedString(
//   $sealingPublic->encode(),
//   $version
// );
$sealer = new Seal($sealingPublic);

// Generate a random one-time key, which will be encrypted with the public key:
$key = SymmetricKey::generate($version);

// Seal means "public key encryption":
$paserk = $sealer->encode($key);

// Now let's associate this PASERK with a PASETO that uses the local key:
$paseto = Builder::getLocal($key, $version)
  ->with('test', 'readme')
  ->withExpiration(
    (new DateTime('NOW'))
      ->add(new DateInterval('P01D'))
  )
  ->withFooterArray(['kid' => $sealer->id($key)])
  ->toString();

var_dump($paserk);
var_dump($paseto);
echo '<br><br>';


$version = new Version4();

// From previous example:
// $paserk = "k4.seal.CYBITLrY6FCMo7ggTYmo8smiKKAGYRxmjGeALPTns1F7_ifJna6QTj5S7H8sT7n-zChVPHT3-O4HP050C28bGvY0c8YKbFT7mbbANS_7XXEw711mq1lywsiqGYPYhymR";
// $paseto = "v4.local.yTI2kGBjQNQ3T4yYJAVvVGhq8VtxM6Px0tX9h-o4OBf5tl1Uw7XULaQ3aV1taY2DgUPA0I57e5h6qcfvKzy_VSqxppkJqFHawCMCCfIPQxhwFSGQBQVJuw1ggU9HoJ5Eky_Hntby4UNNDHgKcluhCWThLg.eyJraWQiOiJrNC5saWQuS1o5YnBIT2xmeXlBajNqZll1M2hUYmNDcnByNURQTmZmUjJZQVQxQmJLTDEifQ";

// Keys for unsealing:
// $sealingSecret = SealingSecretKey::fromEncodedString(
//   $sealingSecret->encode(),
//   // "kwuL4Rx-IqWXF5NdZHjgFuDI12OJ9wuwD-TVUzVjuEThRucIbI7PjmvGLaa5wBnETaFuJs-NLY_n3o5o77IwwQ",
//   $version
// );
// $sealingPublic = $sealingSecret->getPublicKey();

// Unwrap the sytmmetric key for `v4.local.` tokens.
$sealer = new Seal($sealingPublic, $sealingSecret);
$unwrapped = $sealer->decode($paserk);

// Parse the PASETO
$parsed = PasetoParser::getLocal($unwrapped, ProtocolCollection::v4())
  ->parse($paseto);

// Get the claims from the parsed and validated token:
var_dump($parsed->getClaims());
/*
array(2) {
  ["test"]=>
  string(6) "readme"
  ["exp"]=>
  string(25) "2038-01-19T03:14:08+00:00"
}
*/

// Observe the Key ID is the same as the value stored in the footer.
var_dump(Lid::encode($version, $paserk));
var_dump($parsed->getFooterArray()['kid']);
/*
string(51) "k4.lid.x02pbCFhqST8zwglBrGujXOKaNdFBccWlLQQ7JspiY3_"
string(51) "k4.lid.x02pbCFhqST8zwglBrGujXOKaNdFBccWlLQQ7JspiY3_"
*/