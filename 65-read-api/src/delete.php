<?php
$id = isset($_GET['id']) ? $_GET['id'] : '';
include 'validate.php';

$curl = curl_init();
$header = [
  "Accept: */*",
  $token,
];


curl_setopt_array($curl, [
  CURLOPT_URL => "http://localhost/php-tutorial/63-API/barang/$id",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "DELETE",
  CURLOPT_HTTPHEADER => $header
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}