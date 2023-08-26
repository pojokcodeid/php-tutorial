<?php
use MyApp\Core\Message;

Message::flash();
?>
<div class="row">
  <div class="col">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#" class="text-decoration-none">Transaksi</a></li>
        <li class="breadcrumb-item active" aria-current="page">Penerimaan</li>
      </ol>
    </nav>
    <div class="row">
      <div class="bg-body p-3 shadow-sm rounded">
        <div class="mb-2">
          <button onclick=" location.href='<?= BASEURL . '/penerimaan/insert' ?>'" class=" btn btn-sm btn-primary"><i
              class="fa-solid fa-plus"></i> Tanbah
            Data</button>
        </div>
        <div class="container-fluid">
          <table id="example" class="table table-striped" style="width:100%">
            <thead>
              <tr>
                <th>No</th>
                <th>Kode Pembelian</th>
                <th>Tanggal Pembelian</th>
                <th>Tanggal Penerimaan</th>
                <th>Keterangan</th>
                <th>Print</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $no = 1;
              foreach ($penerimaan as $row):
                ?>
                <tr>
                  <td>
                    <?= $no++ ?>
                  </td>
                  <td>
                    <?= $row['kode_pembelian'] ?>
                  </td>
                  <td>
                    <?= $row['tgl_pembelian'] ?>
                  </td>
                  <td>
                    <?= $row['tgl_penerimaan'] ?>
                  </td>
                  <td>
                    <?= $row['keterangan'] ?>
                  </td>
                  <td>
                    <a onclick="popupwindow('<?= BASEURL . '/penerimaan/print/' . $row['id_penerimaan'] ?>', 'Slip Penerimaan', 1000, 600)"
                      href="javascript:void(0)">
                      <i class="fa-solid fa-print"></i>
                    </a>
                  </td>
                </tr>
              <?php endforeach; ?>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>