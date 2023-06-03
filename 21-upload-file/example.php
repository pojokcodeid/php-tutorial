<?php

// dapatkan php.ini untuk mengentahui config dari file upload
echo php_ini_loaded_file();

// upload_max_filesize Menentukan ukuran maksimum file yang diunggah
// post_max_size menentukan ukuran maksimum data POST.
// max_file_uploads membatasi jumlah file yang dapat Anda unggah sekaligus
?>

<!-- penangnanan form untuk upload  
1. enctype="multipart/form-data"
2. input type file
-->
<form action="index.php" method="post" enctype="multipart/form-data">
  <!-- general file type -->
  <input type="file" name="file" id="file">
  <!-- multiple file uplaod -->
  <input type="file" name="file[]" id="file2" multiple>
  <!-- valid hanya type image -->
  <input type="file" name="file" id="file3" accept="image/*">
</form>