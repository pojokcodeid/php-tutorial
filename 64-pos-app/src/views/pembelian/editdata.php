<?php
use MyApp\Core\Message;

$data = Message::getData();
$barang = "";
$jumlah = "";
if ($data) {
  $barang = $data['barang'];
  $jumlah = $data['jumlah'];
}

if ($brg) {
  $barang = $brg['id_barang'];
  $jumlah = $brg['jumlah'];
}
Message::flash();
?>
<div class="row">
  <div class="col">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#" class="text-decoration-none">Transaksi</a></li>
        <li class="breadcrumb-item"><a href="#" class="text-decoration-none">Pembelian</a></li>
        <li class="breadcrumb-item active" aria-current="page">Input Pembelian</li>
      </ol>
    </nav>
    <form class="bg-body rounded shadow-sm p-3" id="form" action="<?= BASEURL . '/pembelian/edit-barang/' . $id ?>"
      method="post">
      <div class="mb-3 row">
        <label for="nama_pembelian" class="col-md-2 col-form-label">Barang</label>
        <div class="col-md-5">
          <select class="form-control select2" name="barang" data-placeholder="Pilih Satu Barang">
            <option value="">-- Pilih Barang --</option>
            <?php foreach ($barangs as $row): ?>
              <option <?php if ($barang == $row['id_barang'])
                echo 'selected' ?> value="<?= $row['id_barang'] ?>"><?= $row['id_barang'] . " - " . $row['nama_barang'] ?></option>
            <?php endforeach; ?>
          </select>
        </div>
      </div>
      <div class="mb-3 row">
        <label for="jumlah" class="col-md-2 col-form-label">Jumlah</label>
        <div class="col-md-5">
          <input type="number" class="form-control" id="jumlah" name="jumlah" value="<?= $jumlah ?>">
        </div>
      </div>
      <div class="mb-3 row">
        <div class="col-md-2"></div>
        <div class="col-md-6">
          <button type="submit" class="btn btn-primary"><i class="fa-solid fa-plus"></i> Simpan</button>
        </div>
      </div>
    </form>
  </div>
</div>