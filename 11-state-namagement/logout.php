<?php

session_start();

//remove
if (isset($_COOKIE[session_name()])) {
    setcookie(session_name(), '', time() - 86400, '/');
}

$_SESSION[] = array();

session_destroy();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Anda berhasil Logout</h1>
    <p><a href="sessionindex.php">Login</a></p>
    <p><a href="profile.php">Go To Profile</a></p>
</body>

</html>