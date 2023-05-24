<?php

echo session_save_path();

session_start();
$_SESSION['user'] = 'admin';
$_SESSION['roles'] = ['administrator', 'approver', 'editor'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session Demo</title>
</head>

<body>
    <h1>Selamat anda sudah login</h1>
    <p><a href="profile.php">Go To Profile</a></p>
</body>

</html>