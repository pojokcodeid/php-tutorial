<?php
$title = "PHP Variable";
echo $title;
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
    $judul = "Contoh PHP Variable";
    ?>
    <h1>
        <?php echo $judul; ?>
    </h1>
    <h1>
        <?= $judul; ?>
    </h1>
</body>

</html>

<?php
$judul2 = "Ini adalah Judul 2";
require("index.view.php");
?>