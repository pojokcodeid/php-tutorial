<?php
use Dotenv\Dotenv;

require_once('../vendor/autoload.php');

// Load dotenv
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

$curl = curl_init();
$akun = '{
  "email":"' . $_ENV['EMAIL'] . '",
  "password":"' . $_ENV['PASSWORD'] . '"
}';

curl_setopt_array($curl, [
  CURLOPT_URL => "http://localhost/php-tutorial/63-API/login",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => $akun,
  CURLOPT_HTTPHEADER => [
    "Accept: */*",
    "Content-Type: application/json",
  ],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  $data = json_decode($response, false);
  if ($data->status != 200) {
    $token = "";
    $data = [
      "message" => $data->message,
    ];
    echo json_encode($data);
  } else {
    $token = "Authorization: Bearer " . $data->data->accessToken;
    $exp = strtotime($data->data->expiry);

    // Simpan token di http-only cookie
    setcookie("myToken", $data->data->accessToken, $exp + (60 * 60 * 24), "/", "", 0);
    echo "login sucess";
  }
}