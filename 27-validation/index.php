<?php

require __DIR__ . '/validation.php';

$data = [
  'firstname' => '',
  'username' => 'abc',
  'address' => 'this is my addess',
  'zipcode' => '999',
  'email' => 'ak@',
  'password' => 'abc123',
  'password2' => 'test',
];

$fields = [
  'firstname' => 'required, max:255',
  'lastname' => 'required, max:255',
  'address' => 'required | min: 10, max:255',
  'zipcode' => 'between:5,5',
  'username' => 'required | alphanumeric | between: 3,255 | unique: users,username',
  'email' => 'required | email | unique: users,email',
  'password' => 'required | secure',
  'password2' => 'required | same:password'
];

$errors = validate(
  $data,
  $fields,
  [
    'required' => 'The %s is required',
    'password2' => ['same' => 'Please enter the same password again'],
  ]
);

echo '<pre>';
print_r($errors);
echo '</pre>';