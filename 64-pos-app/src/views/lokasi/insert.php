<?php
use MyApp\Core\Message;

$data = Message::getData();
$kode = "";
$nama = "";
$keterangan = "";
if ($data) {
  $kode = $data['kode_lokasi'];
  $nama = $data['nama_lokasi'];
  $keterangan = $data['keterangan'];
}
Message::flash();

?>
<div class="row">
  <div class="col">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#" class="text-decoration-none">Master</a></li>
        <li class="breadcrumb-item"><a href="#" class="text-decoration-none">Lokasi</a></li>
        <li class="breadcrumb-item active" aria-current="page">Input Lokasi</li>
      </ol>
    </nav>
    <form class="bg-body rounded shadow-sm p-3" id="form" action="<?= BASEURL . '/kategori/insert' ?>" method="post">
      <div class="mb-3 row">
        <label for="kode_lokasi" class="col-md-2 col-form-label">Kode Lokasi</label>
        <div class="col-md-4">
          <input type="text" class="form-control" id="kode_lokasi" name="kode_lokasi" value="<?= $kode ?>">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="nama_lokasi" class="col-md-2 col-form-label">Nama Lokasi</label>
        <div class="col-md-5">
          <input type="text" class="form-control" id="nama_lokasi" name="nama_lokasi" value="<?= $nama ?>">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="keterangan" class="col-md-2 col-form-label">Keterangan</label>
        <div class="col-md-5">
          <textarea class="form-control" name="keterangan" id="keterangan" cols="30"
            rows="10"><?= $keterangan ?></textarea>
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