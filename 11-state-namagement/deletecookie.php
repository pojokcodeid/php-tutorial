<?php

unset($_COOKIE['return']);
setcookie('return', '', time() - 3600);

?>
<h1>Cookie Dihapus</h1>
<a href="./setcookie.php">Set Cookie</a><br>
<a href="./checkcookie.php">Check Cookie</a>