<?php
$id = isset($_POST['id']) ? $_POST['id'] : '';
$nama = isset($_POST['nama_barang']) ? $_POST['nama_barang'] : '';
$jumlah = isset($_POST['jumlah']) ? $_POST['jumlah'] : '';
$harga = isset($_POST['harga']) ? $_POST['harga'] : '';
$kadaluarsa = isset($_POST['kadaluarsa']) ? $_POST['kadaluarsa'] : '';

include 'validate.php';

$curl = curl_init();
$header = [
  "Accept: */*",
  $token,
];

$data = '{
  "nama_barang": "' . $nama . '",
   "jumlah": "' . $jumlah . '",
   "harga_satuan": "' . $harga . '",
   "kadaluarsa": "' . $kadaluarsa . '"
}';

curl_setopt_array($curl, [
  CURLOPT_URL => "http://localhost/php-tutorial/63-API/barang/$id",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "PATCH",
  CURLOPT_POSTFIELDS => $data,
  CURLOPT_HTTPHEADER => $header,
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  $response = json_decode($response, true);
  if ($response['error'] == null) {
    echo 'Data berhasil diubah<br>';
    echo '<a href="index.php">Kembali</a>';
  } else {
    echo $response['message'] . '<br>';
    echo '<a href="index.php">Kembali</a>';
  }
}