<?php
const FILTERS = [
  'string' => FILTER_SANITIZE_SPECIAL_CHARS,
  'string[]' => [
    'filter' => FILTER_SANITIZE_SPECIAL_CHARS,
    'flags' => FILTER_REQUIRE_ARRAY
  ],
  'email' => FILTER_SANITIZE_EMAIL,
  'int' => [
    'filter' => FILTER_SANITIZE_NUMBER_INT,
    'flags' => FILTER_REQUIRE_SCALAR
  ],
  'int[]' => [
    'filter' => FILTER_SANITIZE_NUMBER_INT,
    'flags' => FILTER_REQUIRE_ARRAY
  ],
  'float' => [
    'filter' => FILTER_SANITIZE_NUMBER_FLOAT,
    'flags' => FILTER_FLAG_ALLOW_FRACTION
  ],
  'float[]' => [
    'filter' => FILTER_SANITIZE_NUMBER_FLOAT,
    'flags' => FILTER_REQUIRE_ARRAY
  ],
  'url' => FILTER_SANITIZE_URL,
];

/**
 * Recursively trim strings in an array
 * @param array $items
 * @return array
 */
function array_trim(array $items): array
{
  return array_map(function ($item) {
    if (is_string($item)) {
      return trim($item);
    } elseif (is_array($item)) {
      return array_trim($item);
    } else
      return $item;
  }, $items);
}

/**
 * Sanitize the inputs based on the rules an optionally trim the string
 * @param array $inputs
 * @param array $fields
 * @param int $default_filter FILTER_SANITIZE_SPECIAL_CHARS
 * @param array $filters FILTERS
 * @param bool $trim
 * @return array
 */
function sanitize(array $inputs, array $fields = [], int $default_filter = FILTER_SANITIZE_SPECIAL_CHARS, array $filters = FILTERS, bool $trim = true): array
{
  if ($fields) {
    foreach ($fields as $key => $field) {
      if (trim($field) == "string") {
        $tempvar = strip_tags($inputs[$key]);
        //$tempvar = trim(preg_replace('/[^A-Za-z0-9 ]/', '', $tempvar));
        $inputs[$key] = $tempvar;
      }
    }
    $options = array_map(fn($field) => $filters[trim($field)], $fields);
    $data = filter_var_array($inputs, $options);
  } else {
    $data = filter_var_array($inputs, $default_filter);
  }

  return $trim ? array_trim($data) : $data;
}