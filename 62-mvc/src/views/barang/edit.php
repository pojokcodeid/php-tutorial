<?php 
  $dataEdit=Message::getData();
  if($dataEdit){
    $data=$dataEdit;
    $data['barang_id']=$dataEdit['id'];
    $data['expire_date']=$dataEdit['kadaluarsa'];
  }
  Message::flash();
?>
<div class="row">
  <div class="container col-50">
    <h2 class="header">Edit Barang</h2>
    <form id="form" action="<?= BASEURL . '/barang/edit_barang' ?>" method="post">
      <input type="hidden" name="id" value="<?= $data['barang_id'] ?>">
      <input type="hidden" id="mode" name="mode" value="update">
      <div class="row">
        <div class="col-25">
          <label for="nama_barang">Nama Barang</label>
        </div>
        <div class="col-50">
          <input type="text" id="nama_barang" name="nama_barang" value="<?= $data['nama_barang'] ?>">
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="jumlah">Jumlah</label>
        </div>
        <div class="col-25">
          <input type="number" id="jumlah" name="jumlah" value="<?= $data['jumlah'] ?>">
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="harga_satuan">Harga Satuan</label>
        </div>
        <div class="col-25">
          <input type="number" id="harga_satuan" name="harga_satuan" value="<?= $data['harga_satuan'] ?>">
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="kadaluarsa">Tanggal Kadaluarsa</label>
        </div>
        <div class="col-25">
          <input type="date" id="kadaluarsa" name="kadaluarsa" value="<?= $data['expire_date'] ?>">
        </div>
      </div>
      <div class="row">
        <div class="col-25">&nbsp;</div>
        <div class="col-75">
          <button onclick="edit('update')" class="btn primary" type="button"><i class="fa-solid fa-pen-to-square"></i> Edit</button>
          <button onclick="edit('delete')" class="btn danger" type="button"><i class="fa-solid fa-trash"></i> Hapus</button>
        </div>
      </div>
    </form>
  </div>
</div>