<?php
require_once './config/Connection.php';
require_once './src/model/BarangModel.php';

if (!isset($_GET['id'])) {
  header('Location: index.php');
  die();
}

$id = $_GET['id'];
$model = new BarangModel();
$data = $model->getById($id);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="./public/css/style.css">
</head>

<body>
  <div class="row center">
    <div class="container col-50">
      <h2 class="header">Input Barang</h2>
      <form id="form" action="./src/action/data.php" method="post">
        <input type="hidden" name="id" value="<?= $data['barang_id'] ?>">
        <input type="hidden" id="mode" name="mode" value="update">
        <div class="row">
          <div class="col-25">
            <label for="nama_barang">Nama Barang</label>
          </div>
          <div class="col-50">
            <input type="text" id="nama_barang" name="nama_barang" value="<?= $data['nama_barang'] ?>">
          </div>
        </div>
        <div class="row">
          <div class="col-25">
            <label for="jumlah">Jumlah</label>
          </div>
          <div class="col-25">
            <input type="number" id="jumlah" name="jumlah" value="<?= $data['jumlah'] ?>">
          </div>
        </div>
        <div class="row">
          <div class="col-25">
            <label for="harga">Harga Satuan</label>
          </div>
          <div class="col-25">
            <input type="number" id="harga" name="harga" value="<?= $data['harga_satuan'] ?>">
          </div>
        </div>
        <div class="row">
          <div class="col-25">
            <label for="kadaluarsa">Tanggal Kadaluarsa</label>
          </div>
          <div class="col-25">
            <input type="date" id="kadaluarsa" name="kadaluarsa" value="<?= $data['expire_date'] ?>">
          </div>
        </div>
        <div class="row">
          <div class="col-25">&nbsp;</div>
          <div class="col-75">
            <input onclick="edit('update')" class="btn primary" type="button" value="Edit">
            <input onclick="edit('delete')" class="btn danger" type="button" value="Hapus">
          </div>
        </div>
      </form>
    </div>
  </div>
</body>
<script src="./public/js/script.js"></script>

</html>