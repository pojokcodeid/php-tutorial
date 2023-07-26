<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="shortcut icon" href="<?= BASEURL . '/img/logo.png' ?>" type="image/x-icon">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
    <?= $judul ?>
  </title>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <link rel="stylesheet" href="<?= BASEURL . '/css/style.css' ?>">
</head>

<body>
  <div class="row-home">
    <div class="left">
      <h2>System Gudang</h2>
      <div>
        <input type="text" id="mySearch" placeholder="Search ..." />
      </div>
      <ul id="myMenu">
        <li>
          <a href="<?= BASEURL . '/barang' ?>"><i class="fa-solid fa-sliders"></i> Barang</a>
        </li>
        <li>
          <a href="<?= BASEURL . '/barang' ?>"><i class="fa-solid fa-table"></i> Kategori</a>
        </li>
      </ul>
    </div>
    <div class="right">