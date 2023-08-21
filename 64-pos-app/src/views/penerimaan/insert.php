<?php
use MyApp\Core\Message;

$data = Message::getData();
$pembelian = "";
if ($data) {
  $pembelian = $data['pembelian'];
}
if ($pembelian_id != "") {
  $pembelian = $pembelian_id;
}
Message::flash();
?>
<div class="row">
  <div class="col">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#" class="text-decoration-none">Transaksi</a></li>
        <li class="breadcrumb-item"><a href="#" class="text-decoration-none">Pembelian</a></li>
        <li class="breadcrumb-item active" aria-current="page">Input Penerimaan</li>
      </ol>
    </nav>
    <form class="bg-body rounded shadow-sm p-3" id="form" action="<?= BASEURL . '/penerimaan/insert' ?>" method="post">
      <div class="mb-3 row">
        <label for="nama_pembelian" class="col-md-2 col-form-label">Pembelian</label>
        <div class="col-md-5">
          <div class="input-group">
            <select class="bg-body form-control select2" name="pembelian" data-placeholder="Pilih Satu Pembelian">
              <option value="">-- Pilih Pembelian --</option>
              <?php foreach ($pembelianData as $row): ?>
                <option <?php if ($pembelian == $row['id_pembelian'])
                  echo 'selected' ?>
                    value="<?= $row['id_pembelian'] ?>">
                  <?= $row['kode_pembelian'] . " - " . $row['nama_pembelian'] ?></option>
              <?php endforeach; ?>
            </select>
            <button type="submit" class="btn btn-primary"><i class="fa-solid fa-magnifying-glass"></i> Load</button>
          </div>
        </div>
      </div>
      <?php if (count($pembelianDtl)): ?>
        <div class="mb-3 row">
          <label for="keterangan" class="col-md-2 col-form-label">Keterangan</label>
          <div class="col-md-5">
            <textarea class="form-control" name="ket" id="ket" cols="30" rows="2"></textarea>
          </div>
        </div>
        <div class="mb-3 row">
          <div class="col">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Kode Barang</th>
                  <th scope="col">Nama Barang</th>
                  <th scope="col">Jumlah</th>
                  <th scope="col">Harga</th>
                  <th scope="col">Actual Barang</th>
                  <th scope="col">Keterangan</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $no = 1;
                foreach ($pembelianDtl as $row): ?>
                  <tr>
                    <td>
                      <?= $no++ ?>
                    </td>
                    <td>
                      <?= $row['kode_barang'] ?>
                    </td>
                    <td>
                      <?= $row['nama_barang'] ?>
                    </td>
                    <td>
                      <?= $row['jumlah'] ?>
                    </td>
                    <td>
                      <?= number_format($row['harga_satuan']) ?>
                    </td>
                    <td>
                      <input type="number" name="barang[<?= $row['id_pembeliandtl'] ?>]" size="10">
                    </td>
                    <td>
                      <input type="text" name="keterangan[<?= $row['id_pembeliandtl'] ?>]">
                    </td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>
        <div class="mb-3 row">
          <div class="col-2">
            <button onclick="addData('form', '<?= BASEURL . '/penerimaan/insert-data' ?>')" type="button"
              class="ms-5 btn btn-primary"><i class="fa-solid fa-floppy-disk"></i> Simpan</button>
          </div>
        </div>
      <?php endif; ?>
    </form>
  </div>
</div>