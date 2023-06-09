<?php

require __DIR__ . '/sanitaize.php';

$inputs = [
  'name' => 'Pojok Code<script>',
  'email' => 'pcode@gmail.com</>',
  'age' => '20abc',
  'weight' => '100.12lb',
  'github' => 'https://github.com/pojokcodeid',
  'hobbies' => [
    ' coding',
    'football',
    ' hiking '
  ]
];

$fiels = [
  'name' => 'string',
  'email' => 'email',
  'age' => 'int',
  'weight' => 'float',
  'github' => 'url',
  'hobbies' => 'string[]'
];

$data = sanitize($inputs, $fiels);

echo '<pre>';
var_dump($data);
echo '</pre>';