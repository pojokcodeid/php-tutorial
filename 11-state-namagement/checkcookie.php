<?php

if (isset($_COOKIE['return'])) {
    echo 'cookie terdefinisi isinya adalah ' . $_COOKIE['return'] . '<br>';
} else {
    echo 'cookie tidak terdefinisi<br>';
}

?>
<a href="./setcookie.php">Set Cookie</a><br>
<a href="./deletecookie.php">Delete Cookie</a>