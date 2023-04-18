<?php

# if dengan satu statement
$is_admin = true;
if ($is_admin)
  echo "Anda adalah admin";
echo "<br>";

#if dengan control block
$can_edit = false;
$is_admin = true;
if ($is_admin) {
  echo "Anda adalah admin";
  $can_edit = true;
}

echo "<br>";
# if bersarang 
$is_admin = true;
$can_approve = false;
if ($is_admin) {
  echo "Anda adalah admin<br>";
  if ($can_approve) {
    echo "Anda dapat melakukan approve";
  }
}
echo "<br>";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php
  $is_admin = true;
  if ($is_admin) :
  ?>
    <a href="#">Edit</a><br>
  <?php
  endif;
  ?>
  <a href="#">View</a>
</body>

</html>

<?php
# kesalahan sering terjadi untuk if
$checed = "on";
if ($checed == 'off') {
  echo "check bos tidak dipilih";
}

if ('on' == $checed) {
  echo "check bos dipilih";
}
