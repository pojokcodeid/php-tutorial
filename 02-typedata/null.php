<?php

$email = null;
var_dump($email);

// null tidak case sensitive 
$email = null;
$first_name = Null;
$last_name = NULL;

echo '<br>';
var_dump($email);
echo '<br>';
var_dump($first_name);
echo '<br>';
var_dump($last_name);
echo '<br>';

// pengujian nilai null 
$home = "pojokcode.com";
var_dump(is_null($email));
var_dump(is_null($home));

//menguji dengan operator identik 
$result = ($email === null);
var_dump($result);

$result = ($home === null);
var_dump($result);
