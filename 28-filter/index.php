<?php

require_once __DIR__ . '/filter.php';

$data = [
  'name' => '',
  'email' => 'pojok$code.com'
];

$fileds = [
  'name' => 'string | required | max:255',
  'email' => 'email | required | email'
];

[$input, $errors] = filter($data, $fileds);

echo '<pre>';
print_r($input);
echo '</pre>';
echo '<pre>';
print_r($errors);
echo '</pre>';