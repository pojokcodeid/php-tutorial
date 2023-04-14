<?php

$email = null;
var_dump($email);

$email = NULL;
$first_name = null;
$last_name = NULL;

echo '<br>';
var_dump($email);
echo '<br>';
var_dump($first_name);
echo '<br>';
var_dump($last_name);
echo '<br>';

$home = "pojokcode.com";
var_dump(is_null($home));
var_dump(is_null($first_name));

$resut = ($email === null);
var_dump($resut);
$result2 = ($home === null);
var_dump($result2);