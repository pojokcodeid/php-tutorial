<?php

define('ONE_WEEK', 7 * 86400);
$returning_visitor = false;

if (!isset($_COOKIE['return'])) {
    setcookie('return', '1', time() + ONE_WEEK);
} else {
    $returning_visitor = true;
}

echo $returning_visitor ? '<h1>Welcome Back !</h1>' : '<h1>Welcome to my website !</h1>';
?>

<a href="./deletecookie.php">Delete Cookie</a><br>
<a href="./checkcookie.php">Check Cookie</a>