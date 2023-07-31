<div class="row">
  <div class="container col-50">
    <h2 class="header">Input Barang</h2>
    <form action="<?= BASEURL . '/barang/insert_barang' ?>" method="post">
      <div class="row">
        <div class="col-25">
          <label for="nama_barang">Nama Barang</label>
        </div>
        <div class="col-50">
          <input type="text" id="nama_barang" name="nama_barang">
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="jumlah">Jumlah</label>
        </div>
        <div class="col-25">
          <input type="number" id="jumlah" name="jumlah">
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="harga_satuan">Harga Satuan</label>
        </div>
        <div class="col-25">
          <input type="number" id="harga_satuan" name="harga_satuan">
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="kadaluarsa">Tanggal Kadaluarsa</label>
        </div>
        <div class="col-25">
          <input type="date" id="kadaluarsa" name="kadaluarsa">
        </div>
      </div>
      <div class="row">
        <div class="col-25">&nbsp;</div>
        <div class="col-75">
          <button type="submit" class="btn primary">
            <i class="fa-solid fa-floppy-disk"></i> Simpan
          </button>
        </div>
      </div>
    </form>
  </div>
</div>