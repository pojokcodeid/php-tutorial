<?php
use MyApp\Core\Message;

$dataEdit = Message::getData();
if ($dataEdit) {
  $data = $dataEdit;
  $data['barang_id'] = $dataEdit['id'];
  $data['expire_date'] = $dataEdit['kadaluarsa'];
}
Message::flash();
?>
<div class="row">
  <div class="col">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#" class="text-decoration-none">Master</a></li>
        <li class="breadcrumb-item"><a href="#" class="text-decoration-none">Barang</a></li>
        <li class="breadcrumb-item active" aria-current="page">Edit</li>
      </ol>
    </nav>
    <form class="bg-body rounded shadow-sm p-3" id="form" action="<?= BASEURL . '/barang/edit' ?>" method="post">
      <input type="hidden" name="id" value="<?= $data['barang_id'] ?>">
      <input type="hidden" id="mode" name="mode" value="update">
      <div class="mb-3 row">
        <label for="nama_barang" class="col-md-2 col-form-label">Nama Barang</label>
        <div class="col-md-5">
          <input type="text" class="form-control" id="nama_barang" name="nama_barang"
            value="<?= $data['nama_barang'] ?>">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="nama_barang" class="col-md-2 col-form-label">Jumlah</label>
        <div class="col-md-3">
          <input type="number" class="form-control" id="jumlah" name="jumlah" value="<?= $data['jumlah'] ?>">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="nama_barang" class="col-md-2 col-form-label">Harga Satuan</label>
        <div class="col-md-3">
          <input type="number" class="form-control" id="harga_satuan" name="harga_satuan"
            value="<?= $data['harga_satuan'] ?>">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="nama_barang" class="col-md-2 col-form-label">Tanggal Kadaluarsa</label>
        <div class="col-md-3">
          <input type="date" class="form-control" id="kadaluarsa" name="kadaluarsa" value="<?= $data['expire_date'] ?>">
        </div>
      </div>
      <div class="mb-3 row">
        <div class="col-md-2">&nbsp;</div>
        <div class="col-md-3">
          <button onclick="edit('update')" class="btn btn-primary" type="button"><i
              class="fa-solid fa-pen-to-square"></i>
            Edit</button>
          <button onclick="edit('delete')" class="btn btn-danger" type="button"><i class="fa-solid fa-trash"></i>
            Hapus</button>
        </div>
      </div>
    </form>
  </div>
</div>