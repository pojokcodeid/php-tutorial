<?php

include 'validate.php';

$curl = curl_init();
$header = [
  "Accept: */*",
  $token,
];

$data = '{
  "nama_barang":"ini testing saja",
  "jumlah":"10",
  "harga_satuan":30000
}';


curl_setopt_array($curl, [
  CURLOPT_URL => "http://localhost/php-tutorial/63-API/barang",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => $data,
  CURLOPT_HTTPHEADER => $header,
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}