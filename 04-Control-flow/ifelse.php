<?php

$is_grand = true;
if ($is_grand) {
    echo "Anda berhak mengacess halaman ini";
} else {
    echo "Anda tidak berhak mengacess halaman ini";
}
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
    $is_admin = false;
    if ($is_admin):
        ?>
        <a href="#">Anda sebagai admin</a>
    <?php else: ?>
        <a href="#">Anda sebagai user</a>
    <?php endif; ?>
</body>

</html>
<?php
echo "<br>";
$number = 9;
if ($number > 10) {
    echo "angka lenih besar dari 10";
} elseif ($number < 10) {
    echo "angka lebih kecil dari 10";
} else {
    echo "angka sama dengan 10";
}

echo "<br>";
$x = 10;
$y = 10;
if ($x > $y):
    $message = 'x lebih besar dari y';
elseif ($x < $y):
    $message = 'x lebih kecil dari y';
else:
    $message = 'x sama dengan y';
endif;
echo $message;