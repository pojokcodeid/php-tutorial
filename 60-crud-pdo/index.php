<?php

require_once './config/Connection.php';
require_once './src/model/MahasiswaModel.php';

$model = new MahasiswaModel();
$mhs = $model->getAllMahasiswa();
require_once './template/header.php'
  ?>
<div class="container">
  <div class="row mt-3">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a class="text-decoration-none" href="#">Home</a></li>
        <li class="breadcrumb-item"><a class="text-decoration-none" href="#">Master</a></li>
        <li class="breadcrumb-item active" aria-current="page">Mahasiswa</li>
      </ol>
    </nav>
  </div>
  <div class="row">
    <div class="col">
      <button onclick="location.href='insert.php'" type="button" class="btn btn-primary btn-sm">Tambah Data</button>
    </div>
  </div>
  <div class="col">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nim</th>
          <th scope="col">Nama</th>
          <th scope="col">TTL</th>
          <th scope="col">Telepon</th>
          <th scope="col">Alamat</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $no = 1;
        foreach ($mhs as $m):
          ?>
          <tr>
            <th scope="row">
              <?= $no++ ?>
            </th>
            <td>
              <?= $m['nim'] ?>
            </td>
            <td>
              <?= $m['nama'] ?>
            </td>
            <td>
              <?= $m['tempat_lahir'] . ", " . $m['tanggal_lahir'] ?>
            </td>
            <td>
              <?= $m['telepon'] ?>
            </td>
            <td>
              <?= $m['alamat'] ?>
            </td>
            <td>
              <form action="edit.php" method="post">
                <input type="hidden" name="id" value="<?= $m['nim'] ?>">
                <button type="submit" class="btn btn-outline-secondary btn-sm">Edit</button>
              </form>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</div>
<?php
require_once './template/footer.php';
?>