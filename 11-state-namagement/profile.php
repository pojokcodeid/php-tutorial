<?php

session_start();
$user = "";
$roles = [];
if (isset($_SESSION['user'])) {
    $user = $_SESSION['user'];
}

if (isset($_SESSION['roles'])) {
    $roles = $_SESSION['roles'];
}

if ($user == "") {
    echo '<h1>Anda belum login</h1>';
    echo '<p><a href="sessionindex.php">Login</a></p>';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>
        <?= $user ?>
    </h1>
    <ul>
        <?php foreach ($roles as $role): ?>
            <li>
                <?= $role ?>
            </li>
        <?php endforeach; ?>
        <li><a href="logout.php">Logout</a></li>
    </ul>
</body>

</html>