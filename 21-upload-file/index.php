<?php

session_start();
require __DIR__ . '/inc/flash.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="./css/style.css">
</head>

<body>
  <?php flash('upload') ?>
  <main>
    <form action="upload.php" method="post" enctype="multipart/form-data">
      <div>
        <label for="file">Pilih File :</label>
        <input type="file" name="file" id="file">
      </div>
      <div>
        <input type="submit" value="Upload">
      </div>
    </form>
  </main>
</body>

</html>