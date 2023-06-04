<?php

session_start();
require_once __DIR__ . '/inc/flash.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="./css/style.css">
</head>

<body class="center">
  <?php flash('upload') ?>
  <form action="upload.php" method="post" enctype="multipart/form-data">
    <div>
      <label for="files">Select files to upload:</label>
      <input type="file" name="files[]" id="files" multiple required />
    </div>
    <div>
      <button type="submit">Upload</button>
    </div>
  </form>
</body>

</html>