<?=
  Message::flash();
?>
<div class="container">
  <div class="header">
    <h1>Data Barang</h1>
  </div>
  <div class="row">
    <div>
      <div>
        <button onclick="location.href='<?= BASEURL . '/barang/insert' ?>'" class="btn primary"><i
            class="fa-solid fa-plus"></i> Tanbah
          Data</button>
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
          foreach ($allBarang as $row):
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
              <td><a href="<?= BASEURL . '/barang/edit/' . $row['barang_id'] ?>"><i class="fa-solid fa-pen-to-square"></i>
                  Edit</a></td>
            </tr>
          <?php endforeach; ?>
      </table>
    </div>
  </div>
</div>