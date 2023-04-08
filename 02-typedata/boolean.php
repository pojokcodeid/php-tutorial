<?php
$is_submited = false;
$is_valid = true;

$is_email_valid = false;
echo is_bool($is_email_valid);

$contoh = "";
echo '<br> ini contoh bukan boolean:' . is_bool($contoh);
echo '<br>';
var_dump($is_submited);
var_dump($contoh);
echo '<br>';

$example = [];

if ($example) {
  echo "True";
} else {
  echo "False";
}

if ($example) {
  echo "TRUE";
}
