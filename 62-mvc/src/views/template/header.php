<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
    <?= $title ?>
  </title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <link rel="stylesheet" href="<?= BASEURL . '/css/style.css' ?>">
</head>

<body>
  <div class="row-home">
    <div class="left">
      <h2>System Gudang</h2>
      <div>
        <input type="text" id="mySearch" placeholder="Search ...">
      </div>
      <ul id="myMenu">
        <li>
          <a href="<?= BASEURL ?>"><i class="fa-solid fa-house"></i> Home</a>
        </li>
        <li>
          <a href="<?= BASEURL . '/barang' ?>"><i class="fa-solid fa-list"></i> Barang</a>
        </li>
        <li>
          <a href="<?= BASEURL . '/kategori' ?>"><i class="fa-regular fa-object-group"></i> Kategori</a>
        </li>
      </ul>
    </div>
    <div class="right">