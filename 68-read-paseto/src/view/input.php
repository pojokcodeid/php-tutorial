<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h3>Input barang</h3>
  <form action="../insert.php" method="post">
    <table width="50%" border="0" cellpadding="3" cellspacing="0">
      <tr>
        <td width="30%">Nama Banrag</td>
        <td>:</td>
        <td>
          <input type="text" name="nama_barang" id="nama_barang">
        </td>
      </tr>
      <tr>
        <td>jumlah</td>
        <td>:</td>
        <td>
          <input type="text" name="jumlah" id="jumlah">
        </td>
      </tr>
      <tr>
        <td>Harga</td>
        <td>:</td>
        <td>
          <input type="text" name="harga" id="harga">
        </td>
      </tr>
      <tr>
        <td>Kadaluarsa</td>
        <td>:</td>
        <td>
          <input type="date" name="kadaluarsa" id="kadaluarsa">
        </td>
      </tr>
      <tr>
        <td colspan="2"></td>
        <td><input type="submit" value="Simpan"></td>
      </tr>
    </table>
  </form>
</body>

</html>