<?php
use MyApp\Core\Message;

$kategori = Message::getData();
if ($kategori) {
  $data['kode_lokasi'] = $kategori['kode_lokasi'];
  $data['nama_lokasi'] = $kategori['nama_lokasi'];
  $data['keterangan'] = $kategori['keterangan'];
}
Message::flash();

?>
<div class="row">
  <div class="col">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#" class="text-decoration-none">Master</a></li>
        <li class="breadcrumb-item"><a href="#" class="text-decoration-none">Lokasi</a></li>
        <li class="breadcrumb-item active" aria-current="page">Edit Lokasi</li>
      </ol>
    </nav>
    <form name="form" class="bg-body rounded shadow-sm p-3" id="form" action="<?= BASEURL . '/lokasi' ?>" method="post">
      <input type="hidden" name="id_lokasi" value="<?= $data['id_lokasi'] ?>">
      <input type="hidden" name="mode" id="mode" value="update">
      <div class="mb-3 row">
        <label for="kode_lokasi" class="col-md-2 col-form-label">Kode Lokasi</label>
        <div class="col-md-4">
          <input type="text" class="form-control" id="kode_lokasi" name="kode_lokasi"
            value="<?= $data['kode_lokasi'] ?>">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="nama_lokasi" class="col-md-2 col-form-label">Nama Lokasi</label>
        <div class="col-md-5">
          <input type="text" class="form-control" id="nama_lokasi" name="nama_lokasi"
            value="<?= $data['nama_lokasi'] ?>">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="keterangan" class="col-md-2 col-form-label">Keterangan</label>
        <div class="col-md-5">
          <textarea class="form-control" name="keterangan" id="keterangan" cols="30"
            rows="10"><?= $data['keterangan'] ?></textarea>
        </div>
      </div>
      <div class="mb-3 row">
        <div class="col-md-2">&nbsp;</div>
        <div class="col-md-3">
          <button onclick="edit('update')" type="button" class="btn btn-primary"><i class="fa-solid fa-floppy-disk"></i>
            Edit</button>
          <button onclick="edit('delete')" type="button" class="btn btn-danger"><i class="fa-solid fa-floppy-disk"></i>
            Delete</button>
        </div>
      </div>
    </form>
  </div>
</div>