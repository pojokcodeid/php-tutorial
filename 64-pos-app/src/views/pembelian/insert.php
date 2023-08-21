<?php
use MyApp\Core\Message;

$data = Message::getData();
$nama = "";
$tanggal = "";
$supplier_id = "";
$keterangan = "";
$detail = [];
if (isset($_SESSION['pembelian'])) {
  $nama = isset($_SESSION['pembelian']['nama_pembelian']) ? $_SESSION['pembelian']['nama_pembelian'] : "";
  $tanggal = isset($_SESSION['pembelian']['tanggal']) ? $_SESSION['pembelian']['tanggal'] : "";
  $supplier_id = isset($_SESSION['pembelian']['supplier']) ? $_SESSION['pembelian']['supplier'] : "";
  $keterangan = isset($_SESSION['pembelian']['keterangan']) ? $_SESSION['pembelian']['keterangan'] : "";
  $detail = isset($_SESSION['pembelian']['detail']) ? $_SESSION['pembelian']['detail'] : [];
}

if ($data) {
  $nama = $data['nama_pembelian'];
  $tanggal = $data['tanggal'];
  $supplier_id = $data['supplier'];
  $keterangan = $data['keterangan'];
}

Message::flash();
?>
<div class="row">
  <div class="col">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#" class="text-decoration-none">Transaksi</a></li>
        <li class="breadcrumb-item"><a href="#" class="text-decoration-none">Pembelian</a></li>
        <li class="breadcrumb-item active" aria-current="page">Input Pembelian</li>
      </ol>
    </nav>
    <form class="bg-body rounded shadow-sm p-3" id="form" action="<?= BASEURL . '/pembelian' ?>" method="post">
      <div class="mb-3 row">
        <label for="kode_lokasi" class="col-md-2 col-form-label">Kode Pembelian</label>
        <div class="col-md-4">
          <input type="text" class="form-control-plaintext" id="kode_lokasi" name="kode_lokasi"
            value="<?= $documentNumber ?>">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="nama_pembelian" class="col-md-2 col-form-label">Nama Pembelian</label>
        <div class="col-md-5">
          <input type="text" class="form-control" id="nama_pembelian" name="nama_pembelian" value="<?= $nama ?>">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="tanggal" class="col-md-2 col-form-label">Tanggal Pembelian</label>
        <div class="col-md-3">
          <input type="date" class="form-control" id="tanggal" name="tanggal" value="<?= $tanggal ?>">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="supplier" class="col-md-2 col-form-label">Supplier</label>
        <div class="col-md-3">
          <select class="form-control" name="supplier" id="supplier">
            <option value="">-- Pilih --</option>
            <?php
            foreach ($supplier as $row): ?>
              <option <?php if ($supplier_id == $row['id_supplier'])
                echo 'selected'; ?> value="<?= $row['id_supplier'] ?>">
                <?= $row['nama_supplier'] ?></option>
            <?php endforeach; ?>
          </select>
        </div>
      </div>
      <div class="mb-3 row">
        <label for="keterangan" class="col-md-2 col-form-label">Keterangan</label>
        <div class="col-md-5">
          <textarea class="form-control" name="keterangan" id="keterangan" cols="30"
            rows="4"><?= $keterangan ?></textarea>
        </div>
      </div>
      <div class="mb-3 row">
        <div class="col-md-2"></div>
        <div class="col-md-6">
          <button type="button" onclick="addData('form','<?= BASEURL . '/pembelian/add-barang' ?>')"
            class="btn btn-primary"><i class="fa-solid fa-plus"></i> Tambah Barang</button>
        </div>
      </div>
      <div class="mb-3 row">
        <div class="col-md-12">
          <table class="table table-striped w-100">
            <thead>
              <tr>
                <th>#</th>
                <th>Kode Barang</th>
                <th>Nama Barang</th>
                <th>Jumlah</th>
                <th>Harga</th>
                <th>Total</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <?php
              $idx = 0;
              $total = 0;
              foreach ($detail as $row):
                $total = $total + $row['harga'];
                ?>
                <tr>
                  <td>1</td>
                  <td>
                    <?= $row['id_barang'] ?>
                  </td>
                  <td>
                    <?= $row['nama_barang'] ?>
                  </td>
                  <td>
                    <?= $row['jumlah'] ?>
                  </td>
                  <td>
                    <?= number_format($row['harga_satuan']) ?>
                  </td>
                  <td>
                    <?= number_format($row['harga']) ?>
                  </td>
                  <td>
                    <a href="<?= BASEURL . '/pembelian/edit-barang/' . $idx ?>" class="text-primary"><i
                        class="fa-solid fa-pen-to-square"></i> Edit</a>
                    | <a href="<?= BASEURL . '/pembelian/delete-barang/' . $idx++ ?>" class="text-danger"><i
                        class="fa-solid fa-trash-can"></i> Hapus</a>
                  </td>
                </tr>
              <?php endforeach; ?>
              <tr>
                <td colspan="5" class="text-center fw-bold">Total</td>
                <td class="fw-bold">
                  <?php
                  if ($total != 0) {
                    $_SESSION['pembelian']['total'] = $total;
                  }
                  echo number_format($total);
                  ?>
                </td>
                <td></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="mb-3 row">
        <div class="col-md-12">
          <button type="submit" class="btn btn-primary"><i class="fa-solid fa-floppy-disk"></i> Simpan</button>
          <?php if (isset($_SESSION['pembelian'])): ?>
            <button onclick="location.href='<?= BASEURL . '/pembelian/delete' ?>'" type="button" class="btn btn-danger"><i
                class="fa-solid fa-trash-can"></i> Bersihkan Data</button>
          <?php endif; ?>
        </div>
      </div>
    </form>
  </div>
</div>