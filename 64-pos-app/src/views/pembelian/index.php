<?php
use MyApp\Core\Message;

Message::flash();
?>
<div class="row">
  <div class="col">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#" class="text-decoration-none">Master</a></li>
        <li class="breadcrumb-item active" aria-current="page">Pembelian</li>
      </ol>
    </nav>
    <div class="row">
      <div class="bg-body p-3 shadow-sm rounded">
        <div class="mb-2">
          <button onclick=" location.href='<?= BASEURL . '/pembelian/insert' ?>'" class=" btn btn-sm btn-primary"><i
              class="fa-solid fa-plus"></i> Tanbah
            Data</button>
        </div>
        <div class="container-fluid">
          <table id="example" class="table table-striped" style="width:100%">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama Pembelian</th>
                <th>Tanggal</th>
                <th>Status</th>
                <th>Total</th>
                <th>&nbsp;</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $no = 1;
              foreach ($pembelian as $row):
                ?>
                <tr>
                  <td>
                    <?= $no++ ?>
                  </td>
                  <td>
                    <?= $row['nama_pembelian'] ?>
                  </td>
                  <td>
                    <?= $row['tanggal'] ?>
                  </td>
                  <td>
                    <?= $row['status'] ?>
                  </td>
                  <td>
                    <?= $row['total'] ?>
                  </td>
                  <td><a href="<?= BASEURL . '/pembelian/' . $row['id_pembelian'] ?>"><i
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