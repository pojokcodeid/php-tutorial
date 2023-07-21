<?php

require_once 'config/Connection.php';
require_once './src/model/BarangModel.php';

$model = new BarangModel();
$data = $model->getAll();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="./public/css/style.css">
</head>

<body>
  <div class="header">
    <h1>Data Barang</h1>
  </div>
  <div class="row center">
    <div class="col-75">
      <div>
        <button onclick="location.href='insert.php'" class="btn primary" type="button">Tanbah Data</button>
      </div>
      <table id="example" class="stripe">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama Barang</th>
            <th>Jumlah</th>
            <th>Harga Satuan</th>
            <th>Kadaluarsa</th>
            <th>&nbsp;</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $no = 1;
          foreach ($data as $row):
            ?>
            <tr>
              <td>
                <?= $no++ ?>
              </td>
              <td>
                <?= $row['nama_barang'] ?>
              </td>
              <td>
                <?= $row['jumlah'] ?>
              </td>
              <td>
                <?= $row['harga_satuan'] ?>
              </td>
              <td>
                <?= $row['expire_date'] ?>
              </td>
              <td><a href="edit.php?id=<?= $row['barang_id'] ?>">Edit</a></td>
            </tr>
          <?php endforeach; ?>
      </table>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
  <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
  <script>
    $('#example').DataTable();
  </script>
</body>

</html>