<?php
use MyApp\Core\Message;

$data = Message::getData();
$namaBarang = "";
$jumlah = "";
$hargaBeli = "";
$hargaJual = "";
$kadaluarsa = "";
$supplier_id = "";
$kategori_id = "";
$lokasi_id = "";
if ($data) {
  $namaBarang = $data['nama_barang'];
  $jumlah = $data['jumlah'];
  $hargaBeli = $data['harga_beli'];
  $hargaJual = $data['harga_jual'];
  $kadaluarsa = $data['kadaluarsa'];
  $supplier_id = $data['supplier'];
  $kategori_id = $data['kategori'];
  $lokasi_id = $data['lokasi'];
}
Message::flash();
?>
<div class="row">
  <div class="col">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#" class="text-decoration-none">Master</a></li>
        <li class="breadcrumb-item"><a href="#" class="text-decoration-none">Barang</a></li>
        <li class="breadcrumb-item active" aria-current="page">Input</li>
      </ol>
    </nav>
    <form class="bg-body rounded shadow-sm p-3" id="form" action="<?= BASEURL . '/barang/insert' ?>" method="post">
      <div class="mb-3 row">
        <label for="nama_barang" class="col-md-2 col-form-label">Nama Barang</label>
        <div class="col-md-5">
          <input type="text" class="form-control" id="nama_barang" name="nama_barang" value="<?= $namaBarang ?>">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="jumlah" class="col-md-2 col-form-label">Jumlah</label>
        <div class="col-md-3">
          <input type="number" class="form-control" id="jumlah" name="jumlah" value="<?= $jumlah ?>">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="harga_beli" class="col-md-2 col-form-label">Harga Beli</label>
        <div class="col-md-3">
          <input type="number" class="form-control" id="harga_beli" name="harga_beli" value="<?= $hargaBeli ?>">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="harga_jual" class="col-md-2 col-form-label">Harga Jual</label>
        <div class="col-md-3">
          <input type="number" class="form-control" id="harga_jual" name="harga_jual" value="<?= $hargaJual ?>">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="nama_barang" class="col-md-2 col-form-label">Tanggal Kadaluarsa</label>
        <div class="col-md-3">
          <input type="date" class="form-control" id="kadaluarsa" name="kadaluarsa" value="<?= $kadaluarsa ?>">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="supplier" class="col-md-2 col-form-label">Supplier</label>
        <div class="col-md-3">
          <select class="form-control" name="supplier" id="supplier">
            <option value="">-- Pilih --</option>
            <?php
            foreach ($supplier as $row): ?>
              <option <?php if ($supplier_id == $row['id_supplier'])
                echo 'selected'; ?> value="<?= $row['id_supplier'] ?>">
                <?= $row['nama_supplier'] ?></option>
            <?php endforeach; ?>
          </select>
        </div>
      </div>
      <div class="mb-3 row">
        <label for="kategori" class="col-md-2 col-form-label">Kategori Barang</label>
        <div class="col-md-3">
          <select class="form-control" name="kategori" id="kategori">
            <option value="">-- Pilih --</option>
            <?php
            foreach ($kategori as $row): ?>
              <option <?php if ($kategori_id == $row['id_kategori'])
                echo 'selected'; ?> value="<?= $row['id_kategori'] ?>">
                <?= $row['nama_kategori'] ?></option>
            <?php endforeach; ?>
          </select>
        </div>
      </div>
      <div class="mb-3 row">
        <label for="lokasi" class="col-md-2 col-form-label">Lokasi Barang</label>
        <div class="col-md-3">
          <select class="form-control" name="lokasi" id="lokasi">
            <option value="">-- Pilih --</option>
            <?php
            foreach ($lokasi as $row): ?>
              <option <?php if ($lokasi_id == $row['id_lokasi'])
                echo 'selected'; ?> value="<?= $row['id_lokasi'] ?>"><?= $row['kode_lokasi'] . ' - ' . $row['nama_lokasi'] ?></option>
            <?php endforeach; ?>
          </select>
        </div>
      </div>
      <div class="mb-3 row">
        <div class="col-md-2">&nbsp;</div>
        <div class="col-md-3">
          <button type="submit" class="btn btn-primary"><i class="fa-solid fa-floppy-disk"></i> Submit</button>
        </div>
      </div>
    </form>
  </div>
</div>