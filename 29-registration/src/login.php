<?php

if (is_user_logged_in()) {
  redirect_to('index.php');
}

$inputs = [];
$errors = [];

if (is_post_request()) {

  // sanitize & validate user inputs
  [$inputs, $errors] = filter($_POST, [
    'username' => 'string | required',
    'password' => 'string | required'
  ]);

  // if validation error
  if ($errors) {
    redirect_with('login.php', [
      'errors' => $errors,
      'inputs' => $inputs
    ]);
  }

  // if login fails
  if (!login($inputs['username'], $inputs['password'])) {

    $errors['login'] = 'Invalid username or password';

    redirect_with('login.php', [
      'errors' => $errors,
      'inputs' => $inputs
    ]);
  }

  // login successfully
  redirect_to('index.php');

} else if (is_get_request()) {
  [$errors, $inputs] = session_flash('errors', 'inputs');
}