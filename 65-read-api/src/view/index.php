<?php
include "../getall.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h3>Daftar Barang</h3>
  <table width="50%" border="1" cellpadding="3" cellspacing="0">
    <tr>
      <td colspan="5"><a href="input.php">Input Data</a></td>
    </tr>
    <tr>
      <td>No</td>
      <td>Nama</td>
      <td>Jumlah</td>
      <td>Harga</td>
      <td>&nbsp;</td>
    </tr>
    <?php
    $no = 1;
    foreach ($response as $row) {
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
          <a href="ubah.php?id=<?= $row['barang_id'] ?>">Ubah</a>&nbsp;
          <a href="../delete.php?id=<?= $row['barang_id'] ?>">Hapus</a>
        </td>
      </tr>
      <?php
    }
    ?>
  </table>
</body>

</html>