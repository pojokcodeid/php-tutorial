<?php
use MyApp\Core\Message;

$data = Message::getData();
$namaBarang = "";
$jumlah = "";
$harga = "";
$kadaluarsa = "";
if ($data) {
  $namaBarang = $data['nama_barang'];
  $jumlah = $data['jumlah'];
  $harga = $data['harga_satuan'];
  $kadaluarsa = $data['kadaluarsa'];
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
        <label for="nama_barang" class="col-md-2 col-form-label">Jumlah</label>
        <div class="col-md-3">
          <input type="number" class="form-control" id="jumlah" name="jumlah" value="<?= $jumlah ?>">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="nama_barang" class="col-md-2 col-form-label">Harga Satuan</label>
        <div class="col-md-3">
          <input type="number" class="form-control" id="harga_satuan" name="harga_satuan" value="<?= $harga ?>">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="nama_barang" class="col-md-2 col-form-label">Tanggal Kadaluarsa</label>
        <div class="col-md-3">
          <input type="date" class="form-control" id="kadaluarsa" name="kadaluarsa" value="<?= $kadaluarsa ?>">
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