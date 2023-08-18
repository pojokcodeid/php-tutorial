<?php
use MyApp\Core\Message;

$data = Message::getData();
$nama = "";
$email = "";
$telepon = "";
$alamat = "";
if ($data) {
  $nama = $data['nama_supplier'];
  $email = $data['email'];
  $telepon = $data['telepon'];
  $alamat = $data['alamat'];
}
Message::flash();

?>
<div class="row">
  <div class="col">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#" class="text-decoration-none">Master</a></li>
        <li class="breadcrumb-item"><a href="#" class="text-decoration-none">Supplier</a></li>
        <li class="breadcrumb-item active" aria-current="page">Input Supplier</li>
      </ol>
    </nav>
    <form class="bg-body rounded shadow-sm p-3" id="form" action="<?= BASEURL . '/supplier/insert' ?>" method="post">
      <div class="mb-3 row">
        <label for="nama_supplier" class="col-md-2 col-form-label">Nama Supplier</label>
        <div class="col-md-5">
          <input type="text" class="form-control" id="nama_supplier" name="nama_supplier" value="<?= $nama ?>">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="email" class="col-md-2 col-form-label">Email</label>
        <div class="col-md-4">
          <input type="text" class="form-control" id="email" name="email" value="<?= $email ?>">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="telepon" class="col-md-2 col-form-label">Telepon</label>
        <div class="col-md-4">
          <input type="text" maxlength="15" class="form-control" id="telepon" name="telepon" value="<?= $telepon ?>">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="alamat" class="col-md-2 col-form-label">Alamat</label>
        <div class="col-md-5">
          <textarea class="form-control" name="alamat" id="alamat" cols="30" rows="5"><?= $alamat ?></textarea>
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