<?php
use MyApp\Core\Message;

Message::flash();
?>
<div class="row">
  <div class="col">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#" class="text-decoration-none">Master</a></li>
        <li class="breadcrumb-item active" aria-current="page">Barang</li>
      </ol>
    </nav>
    <div class="row">
      <div class="bg-body p-3 shadow-sm rounded">
        <div class="mb-2">
          <button onclick=" location.href='<?= BASEURL . '/barang/insert' ?>'" class=" btn btn-sm btn-primary"><i
              class="fa-solid fa-plus"></i> Tanbah
            Data</button>
        </div>
        <div class="container-fluid">
          <table id="example" class="table table-striped" style="width:100%">
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
                  <td><a href="<?= BASEURL . '/barang/edit/' . $row['barang_id'] ?>"><i
                        class="fa-solid fa-pen-to-square"></i>
                      Edit</a></td>
                </tr>
              <?php endforeach; ?>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>