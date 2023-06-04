<?php

echo php_ini_loaded_file();


?>

<form action="index.php" method="post" enctype="multipart/form-data">
  <input type="file" name="file" id="file">
  <input type="file" name="file[]" id="file[]" multiple>
</form>