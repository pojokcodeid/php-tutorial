<?php

require_once '../vendor/autoload.php';

// use ParagonIE\Paseto\Builder;
// use ParagonIE\Paseto\Keys\Version4\SymmetricKey;
// use ParagonIE\Paseto\Protocol\Version4;
// use ParagonIE\Paseto\Purpose;


// $sharedKey = new SymmetricKey(random_bytes(32));
// $data = $sharedKey->encode();
// var_dump($data);
// echo '<br>';

// $token = (new Builder())
//   ->setKey($sharedKey)
//   ->setVersion(new Version4)
//   ->setPurpose(Purpose::local())
//   // Set it to expire in one day
//   ->setIssuedAt()
//   ->setNotBefore()
//   ->setExpiration(
//     (new DateTime())->add(new DateInterval('P01D'))
//   )
//   // Store arbitrary data
//   ->setClaims([
//     'example' => 'Hello world',
//     'security' => 'Now as easy as PIE'
//   ]);
// echo $token; // Converts automatically to a string

// Membuat kunci simetris acak

use ParagonIE\Paseto\Keys\AsymmetricSecretKey;
use ParagonIE\Paseto\Parser;
use ParagonIE\Paseto\ProtocolCollection;
use ParagonIE\Paseto\Purpose;
use ParagonIE\Paseto\Rules\NotExpired;

// Membuat kunci asimetris rahasia yang sama dengan yang digunakan untuk menandatangani token
$key = new AsymmetricSecretKey(hex2bin('a0a1a2a3a4a5a6a7a8a9aaabacadaeaf'));

// Membuat token PASETO v4 public yang akan didecode
$token = 'v4.public.eyJleHAiOiIyMDIzLTA4LTEzVDE5OjA1OjM3LjAwMDAwMFoiLCJpZCI6IjU5ZTVkMDc4LTg3ODMtNGM2NC1iZWQyLTNjNzU5ZTQ3YjQ3NyIsIm5hbWUiOiJSYW5kYWxsIERlZ2dlcyIsInBlcm1pc3Npb25zIjpbImRvd25sb2FkOmZpbGUtYS5tcDQiLCJkb3dubG9hZDpmaWxlLWIubXA0IiwiZG93bmxvYWQ6ZmlsZS1jLm1wNCJdfQ.0GQf0hY6Zl9F8t7y9OJx7XgQf0hY6Zl9F8t7y9OJx7XgQf0hY6Zl9F8t7y9OJx7XgQf0hY6Zl9F8t7y9OJx7XgQf0hY6Zl9F8t7y9OJx7XgQf0hY6Zl9F8t7y9OJx';

// Membuat parser PASETO untuk memverifikasi dan mendecode token PASETO v4 public dengan kunci asimetris rahasia
$parser = Parser::getPublic($key, ProtocolCollection::v4())
  ->addRule(new NotExpired()) // Menambahkan aturan untuk memeriksa waktu kedaluwarsa
  ->setPurpose(new Purpose('public')); // Mengatur tujuan menjadi public

// Mendecode token PASETO v4 public menjadi objek JSON
$json = $parser->parse($token);

// Menampilkan objek JSON yang didecode
echo "JSON: " . json_encode($json, JSON_PRETTY_PRINT) . "\n";