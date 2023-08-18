<?php

include '../validate.php';

$curl = curl_init();
$header = [
  "Accept: */*",
  $token,
];

curl_setopt_array($curl, [
  CURLOPT_URL => "http://localhost/php-tutorial/67-API-paseto/barang",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => $header,
]);

$response = curl_exec($curl);
$err = curl_error($curl);
curl_close($curl);

$response = json_decode($response, true);
$response = $response['data'];


// if ($err) {
//   echo "cURL Error #:" . $err;
// } else {
//   if (!$response) {
//     $data = [
//       "message" => "data kosong atau anda tidak memiliki akses"
//     ];
//     echo json_encode($data);
//     unset($_COOKIE['myToken']);
//   } else {
//     echo $response;
//   }
// }