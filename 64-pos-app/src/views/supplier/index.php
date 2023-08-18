<?php
use MyApp\Core\Message;

Message::flash();
?>
<div class="row">
  <div class="col">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#" class="text-decoration-none">Master</a></li>
        <li class="breadcrumb-item active" aria-current="page">Supplier</li>
      </ol>
    </nav>
    <div class="row">
      <div class="bg-body p-3 shadow-sm rounded">
        <div class="mb-2">
          <button onclick=" location.href='<?= BASEURL . '/supplier/insert' ?>'" class=" btn btn-sm btn-primary"><i
              class="fa-solid fa-plus"></i> Tanbah
            Data</button>
        </div>
        <div class="container-fluid">
          <table id="example" class="table table-striped" style="width:100%">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama Supplier</th>
                <th>Email</th>
                <th>Telepon</th>
                <th>Alamat</th>
                <th>&nbsp;</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $no = 1;
              foreach ($allSupplier as $row):
                ?>
                <tr>
                  <td>
                    <?= $no++ ?>
                  </td>
                  <td>
                    <?= $row['nama_supplier'] ?>
                  </td>
                  <td>
                    <?= $row['email'] ?>
                  </td>
                  <td>
                    <?= $row['telepon'] ?>
                  </td>
                  <td>
                    <?= $row['alamat'] ?>
                  </td>
                  <td><a href="<?= BASEURL . '/supplier/' . $row['id_supplier'] ?>"><i
                        class="fa-solid fa-pen-to-square"></i>
                      Edit</a></td>
                </tr>
              <?php endforeach; ?>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>