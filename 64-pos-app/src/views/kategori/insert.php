<?php
use MyApp\Core\Message;

$data = Message::getData();
$nama = "";
if ($data) {
  $nama = $data['nama_kategori'];
}
Message::flash();

?>
<div class="row">
  <div class="col">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#" class="text-decoration-none">Master</a></li>
        <li class="breadcrumb-item"><a href="#" class="text-decoration-none">Kategori</a></li>
        <li class="breadcrumb-item active" aria-current="page">Input Kategori</li>
      </ol>
    </nav>
    <form class="bg-body rounded shadow-sm p-3" id="form" action="<?= BASEURL . '/kategori/insert' ?>" method="post">
      <div class="mb-3 row">
        <label for="nama_kategori" class="col-md-2 col-form-label">Nama Kategori</label>
        <div class="col-md-5">
          <input type="text" class="form-control" id="nama_kategori" name="nama_kategori" value="<?= $nama ?>">
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