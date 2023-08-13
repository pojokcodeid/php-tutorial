<?php
use MyApp\Core\Message;

$data = Message::getData();
if ($data) {
  $barang['nama_barang'] = $data['nama_barang'];
  $barang['jumlah'] = $data['jumlah'];
  $barang['harga_satuan'] = $data['harga_satuan'];
  $barang['expire_date'] = $data['kadaluarsa'];
}
Message::flash();
?>
<div class="row">
  <div class="container col-50">
    <h2 class="header">Input Barang</h2>
    <form id="form" action="<?= BASEURL . '/barang/edit_data' ?>" method="post">
      <input type="hidden" name="id" value="<?= $barang['barang_id'] ?>">
      <input type="hidden" id="mode" name="mode" value="update">
      <div class="row">
        <div class="col-25">
          <label for="nama_barang">Nama Barang</label>
        </div>
        <div class="col-50">
          <input type="text" id="nama_barang" name="nama_barang" value="<?= $barang['nama_barang'] ?>">
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="jumlah">Jumlah</label>
        </div>
        <div class="col-25">
          <input type="number" id="jumlah" name="jumlah" value="<?= $barang['jumlah'] ?>">
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="harga_satuan">Harga Satuan</label>
        </div>
        <div class="col-25">
          <input type="number" id="harga_satuan" name="harga_satuan" value="<?= $barang['harga_satuan'] ?>">
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="kadaluarsa">Tanggal Kadaluarsa</label>
        </div>
        <div class="col-25">
          <input type="date" id="kadaluarsa" name="kadaluarsa" value="<?= $barang['expire_date'] ?>">
        </div>
      </div>
      <div class="row">
        <div class="col-25">&nbsp;</div>
        <div class="col-75">
          <button onclick="edit('update')" type="button" class="btn primary">
            <i class="fa-solid fa-pen-to-square"></i> Edit
          </button>
          <button onclick="edit('delete')" type="button" class="btn danger">
            <i class="fa-solid fa-trash"></i> Delete
          </button>
        </div>
      </div>
    </form>
  </div>
</div>