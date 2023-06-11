<?php

require_once __DIR__ . '/sanitaize.php';
require_once __DIR__ . '/validation.php';

function filter(array $data, array $fields, array $messages = []): array
{
  $sanitization = [];
  $validation = [];

  foreach ($fields as $field => $rules) {
    if (strpos($rules, '|')) {
      [$sanitization[$field], $validation[$field]] = explode('|', $rules, 2);
    } else {
      $sanitization[$field] = $rules;
    }
  }

  $inputs = sanitize($data, $sanitization);
  $errors = validate($inputs, $validation, $messages);

  return [$inputs, $errors];
}