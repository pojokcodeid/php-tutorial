<?php

require __DIR__ . '/sanitization.php';

$inputs = [
  'name' => 'joe<script>',
  'email' => 'joe@example.com</>',
  'age' => '18abc',
  'weight' => '100.12lb',
  'github' => 'https://github.com/joe',
  'hobbies' => [
    ' Reading',
    'Running ',
    ' Programming '
  ]
];

$fields = [
  'name' => 'string',
  'email' => 'email',
  'age' => 'int',
  'weight' => 'float',
  'github' => 'url',
  'hobbies' => 'string[]'
];

$data = sanitize($inputs, $fields);

echo '<pre>';
var_dump($data);
echo '</pre>';