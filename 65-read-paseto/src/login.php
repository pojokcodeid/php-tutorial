<?php
use Dotenv\Dotenv;

require_once('../../vendor/autoload.php');

// Load dotenv
$dotenv = Dotenv::createImmutable('../../');
$dotenv->load();

// memanggil fungsi curl
$curl = curl_init();
$akun = '{
  "email":"' . $_ENV['EMAIL'] . '",
  "password":"' . $_ENV['PASSWORD'] . '"
}';

curl_setopt_array($curl, [
  // menenukan url yang akan diacess
  CURLOPT_URL => "http://localhost/php-tutorial/67-API-paseto/login",
  // menentukan apakah curl akan mengembalikan data dalam bentuk string
  CURLOPT_RETURNTRANSFER => true,
  // menentukan jenis encoding yang akan digunakan 
  CURLOPT_ENCODING => "",
  // menentukan jumlah maksimum redirect yang akan diizinkan  
  CURLOPT_MAXREDIRS => 10,
  // menentukan waktu timeout yang akan diizinkan  
  CURLOPT_TIMEOUT => 30,
  // menentukan versi http yang akan digunakan 
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  // menentukan metode request yang akan diakses PUT POST, GET dst..  
  CURLOPT_CUSTOMREQUEST => "POST",
  // menentukan data yang akan diakses 
  CURLOPT_POSTFIELDS => $akun,
  // menentukan header yang akan digunakan 
  CURLOPT_HTTPHEADER => [
    "Accept: */*",
    "Content-Type: application/json",
  ],
]);
// menjalankan curl
$response = curl_exec($curl);
// menentukan error
$err = curl_error($curl);
// menutup curl
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
    // setcookie("myToken", $data->data->accessToken, $exp + (60 * 60 * 24), "/", "", 0);
    setcookie("myToken", $data->data->accessToken, $exp, "/", "", 0);
    setcookie("myExp", $data->data->expiry, $exp, "/", "", 0);
    // echo "login sucess";
  }
}