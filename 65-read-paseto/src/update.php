<?php
$id = isset($_POST['id']) ? $_POST['id'] : '';
$nama = isset($_POST['nama_barang']) ? $_POST['nama_barang'] : '';
$jumlah = isset($_POST['jumlah']) ? $_POST['jumlah'] : '';
$harga = isset($_POST['harga']) ? $_POST['harga'] : '';
$kadaluarsa = isset($_POST['kadaluarsa']) ? $_POST['kadaluarsa'] : '';

include 'validate.php';
// memanggil fungsi curl
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
  // menenukan url yang akan diacess
  CURLOPT_URL => "http://localhost/php-tutorial/67-API-paseto/barang/$id",
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
  CURLOPT_CUSTOMREQUEST => "PATCH",
  // menentukan data yang akan diakses                                
  CURLOPT_POSTFIELDS => $data,
  // menentukan header yang akan digunakan                                     
  CURLOPT_HTTPHEADER => $header,
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
  $response = json_decode($response, true);
  if ($response['error'] == null) {
    echo 'Data berhasil diubah<br>';
    echo '<a href="./view/index.php">Kembali</a>';
  } else {
    echo $response['message'] . '<br>';
    echo '<a href="./view/index.php">Kembali</a>';
  }
}