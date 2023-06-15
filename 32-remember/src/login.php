<?php

if (is_user_logged_in()) {
  redirect_to('index.php');
}

$inputs = [];
$errors = [];

if (is_post_request()) {
  //sanitize dan validation
  [$inputs, $errors] = filter($_POST, [
    'username' => 'string | required',
    'password' => 'string | required',
    'remember_me' => 'string',
  ]);

  //if validation error
  if ($errors) {
    redirect_with('login.php', [
      'errors' => $errors,
      'inputs' => $inputs
    ]);
  }

  //if login fails
  if (!login($inputs['username'], $inputs['password'], isset($inputs['remember_me']))) {
    $errors['login'] = 'Username atau password salah';
    redirect_with('login.php', [
      'errors' => $errors,
      'inputs' => $inputs
    ]);
  }

  //login berhasil
  redirect_to('index.php');
} else {
  [$errors, $inputs] = session_flash('errors', 'inputs');
}