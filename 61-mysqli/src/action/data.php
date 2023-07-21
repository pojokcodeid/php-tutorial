<?php

require_once '../../config/Connection.php';
require_once '../../src/model/BarangModel.php';

// siapkan data
$nama = isset($_POST['nama_barang']) ? $_POST['nama_barang'] : '';
$jumlah = isset($_POST['jumlah']) ? $_POST['jumlah'] : '';
$harga = isset($_POST['harga']) ? $_POST['harga'] : '';
$kadaluarsa = isset($_POST['kadaluarsa']) ? $_POST['kadaluarsa'] : '';

$mode = isset($_POST['mode']) ? $_POST['mode'] : 'insert';
$barang_id = isset($_POST['id']) ? $_POST['id'] : '';

$data = [];
$data['nama_barang'] = $nama;
$data['jumlah'] = $jumlah;
$data['harga_satuan'] = $harga;
$data['kadaluarsa'] = $kadaluarsa;
$data['barang_id'] = $barang_id;

$model = new BarangModel();
if ($mode == 'insert') {
  if ($model->insert($data)) {
    echo "
      <script>
        alert('Data berhasil ditambahkan');
        location.href='../../index.php';
      </script>";
    die();
  }
}

if ($mode == "update") {
  if ($model->update($data)) {
    echo "
    <script>
      alert('Data berhasil diubah');
      window.location.href = '../../index.php';
    </script>
    ";
    die();
  }
}

if ($mode == "delete") {
  if ($model->delete($data)) {
    echo "
    <script>
      alert('Data berhasil dihapus');
      window.location.href = '../../index.php';
    </script>
    ";
    die();
  }
}