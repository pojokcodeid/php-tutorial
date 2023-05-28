<?php

$agree = isset($_POST['agree']) ? $_POST['agree'] : '';
$agree = strip_tags($agree);
$agree = trim(preg_replace('/[^a-zA-Z0-9 ]/', '', $agree));
$inputs['agree'] = $agree;

if ($agree) {
  echo 'Thnak you for join us !';
} else {
  $errors['agree'] = 'You must agree to the Terms of Service';
}