<?php

require_once __DIR__ . '/../src/bootstrap.php';

if (is_get_request()) {
  [$inputs, $errors] = filter($_GET, [
    'email' => 'string | required | email',
    'activation_code' => 'string | required'
  ]);

  if (!$errors) {
    $user = find_unverified_user($inputs['activation_code'], $inputs['email']);

    if ($user && activate_user($user['id'])) {
      redirect_with_message(
        'login.php',
        'Your account has been activated successfully.'
      );
    }
  }
}

// redirect to the register page in other cases
redirect_with_message(
  'register.php',
  'The activation link is not valid, please register again.',
  FLASH_ERROR
);