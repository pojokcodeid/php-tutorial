<?php

// PHP password_hash adalah fungsi yang digunakan untuk membuat hash password menggunakan algoritma hashing satu arah yang kuat

$mypass = "rahasia";
$hash = password_hash($mypass, PASSWORD_DEFAULT);
echo $hash;
echo '<br>';

echo password_verify("rahasia", $hash);
echo '<br>';
if (password_verify("rahasia", $hash)) {
  echo "password benar";
} else {
  echo "password salah";
}

echo '<br>';

$hash = password_hash("rahasia", PASSWORD_BCRYPT);
echo $hash;
echo '<br>';
if (password_verify("rahasia", $hash)) {
  echo "password benar";
} else {
  echo "password salah";
}

echo '<br>';
$hash = password_hash("rahasia", PASSWORD_ARGON2I);
echo $hash;
echo '<br>';
if (password_verify("rahasia", $hash)) {
  echo "password benar";
} else {
  echo "password salah";
}

echo '<br>';
$hash = password_hash("rahasia", PASSWORD_ARGON2ID);
echo $hash;
echo '<br>';
if (password_verify("rahasia", $hash)) {
  echo "password benar";
} else {
  echo "password salah";
}