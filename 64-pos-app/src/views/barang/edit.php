<?php
use MyApp\Core\Message;

$dataEdit = Message::getData();
if ($dataEdit) {
  $data = $dataEdit;
  $data['nama_barang'] = $dataEdit['nama_barang'];
  $data['jumlah'] = $dataEdit['jumlah'];
  $data['harga_beli'] = $dataEdit['harga_beli'];
  $data['harga_jual'] = $dataEdit['harga_jual'];
  $data['tgl_kadaluarsa'] = $dataEdit['kadaluarsa'];
  $data['id_supplier'] = $dataEdit['supplier'];
  $data['id_kategori'] = $dataEdit['kategori'];
  $data['id_lokasi'] = $dataEdit['lokasi'];
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
    <form class="bg-body rounded shadow-sm p-3" id="form" action="<?= BASEURL . '/barang' ?>" method="post">
      <input type="hidden" name="id" value="<?= $data['id_barang'] ?>">
      <input type="hidden" id="mode" name="mode" value="update">
      <div class="mb-3 row">
        <label for="nama_barang" class="col-md-2 col-form-label">Nama Barang</label>
        <div class="col-md-5">
          <input type="text" class="form-control" id="nama_barang" name="nama_barang"
            value="<?= $data['nama_barang'] ?>">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="jumlah" class="col-md-2 col-form-label">Jumlah</label>
        <div class="col-md-3">
          <input type="number" class="form-control" id="jumlah" name="jumlah" value="<?= $data['jumlah'] ?>">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="harga_beli" class="col-md-2 col-form-label">Harga Beli</label>
        <div class="col-md-3">
          <input type="number" class="form-control" id="harga_beli" name="harga_beli"
            value="<?= $data['harga_beli'] ?>">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="harga_jual" class="col-md-2 col-form-label">Harga Jual</label>
        <div class="col-md-3">
          <input type="number" class="form-control" id="harga_jual" name="harga_jual"
            value="<?= $data['harga_jual'] ?>">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="nama_barang" class="col-md-2 col-form-label">Tanggal Kadaluarsa</label>
        <div class="col-md-3">
          <input type="date" class="form-control" id="kadaluarsa" name="kadaluarsa"
            value="<?= $data['tgl_kadaluarsa'] ?>">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="supplier" class="col-md-2 col-form-label">Supplier</label>
        <div class="col-md-3">
          <select class="form-control" name="supplier" id="supplier">
            <option value="">-- Pilih --</option>
            <?php
            foreach ($supplier as $row): ?>
              <option <?php if ($data['id_supplier'] == $row['id_supplier'])
                echo 'selected'; ?>
                value="<?= $row['id_supplier'] ?>">
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
              <option <?php if ($data['id_kategori'] == $row['id_kategori'])
                echo 'selected'; ?>
                value="<?= $row['id_kategori'] ?>">
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
              <option <?php if ($data['id_lokasi'] == $row['id_lokasi'])
                echo 'selected'; ?>
                value="<?= $row['id_lokasi'] ?>"><?= $row['kode_lokasi'] . ' - ' . $row['nama_lokasi'] ?></option>
            <?php endforeach; ?>
          </select>
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