<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./public/css/style.css">
  <title>
    <?= $title ?? 'Home' ?>
  </title>
</head>

<body>
  <main>
    <?php flash() ?>