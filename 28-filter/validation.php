<?php

require __DIR__ . '/database.php';

const DEFAULT_VALIDATION_ERRORS = [
  'required' => 'Please enter the %s',
  'email' => 'The %s must be a valid email address',
  'min' => 'The %s must be at least %d characters long',
  'max' => 'The %s must be at most %d characters long',
  'between' => 'The %s must be between %d and %d characters long',
  'same' => 'The %s and %s must match',
  'alphanumeric' => 'The %s must only contain letters and numbers',
  'secure' => 'The %s must have between 8 and 64 characters and contain at least one number, one upper case letter, one lower case letter and one special character',
  'unique' => 'The %s already exists',
];

//validation
function validate(array $data, array $fields, array $messages = []): array
{
  $split = fn($str, $sparator) => array_map('trim', explode($sparator, $str));

  //get the message rules
  $rule_messages = array_filter($messages, fn($massage) => is_string($massage));
  //overtite default message
  $validation_errors = array_merge(DEFAULT_VALIDATION_ERRORS, $rule_messages);
  $errors = [];
  foreach ($fields as $field => $option) {
    $rules = $split($option, '|');
    foreach ($rules as $rule) {
      $params = [];
      if (strpos($rule, ':')) {
        [$rule_name, $param_str] = $split($rule, ':');
        $params = $split($param_str, ',');
      } else {
        $rule_name = trim($rule);
      }

      $fn = 'is_' . $rule_name;
      if (is_callable($fn)) {
        $pass = $fn($data, $field, ...$params);
        if (!$pass) {
          $errors[$field] = sprintf(
            $messages[$field][$rule_name] ?? $validation_errors[$rule_name],
            $field,
            ...$params
          );
        }
      }
    }
  }

  return $errors;
}

//wajib diisi
function is_required(array $data, string $field): bool
{
  return isset($data[$field]) && $data[$field] !== '';
}

//valid email
function is_email(array $data, string $field): bool
{
  if (empty($data[$field])) {
    return true;
  }

  return filter_var($data[$field], FILTER_VALIDATE_EMAIL);
}

//valid minimum
function is_min(array $data, string $field, int $min): bool
{
  if (!isset($data[$field])) {
    return true;
  }

  return mb_strlen($data[$field]) >= $min;
}

//valid maximum
function is_max(array $data, string $field, int $max): bool
{
  if (!isset($data[$field])) {
    return true;
  }
  return mb_strlen($data[$field]) <= $max;
}

//valid between
function is_between(array $data, string $field, int $min, int $max): bool
{
  if (!isset($data[$field])) {
    return true;
  }
  $len = mb_strlen($data[$field]);
  return $len >= $min && $len <= $max;
}

//valid same
function is_same(array $data, string $field, string $other): bool
{
  if (isset($data[$field], $data[$other])) {
    return $data[$field] === $data[$other];
  }

  if (!isset($data[$field]) && !isset($data[$other])) {
    return true;
  }

  return false;
}

//valid alphanumeric
function is_alphanumeric(array $data, string $field): bool
{
  if (!isset($data[$field])) {
    return true;
  }

  return ctype_alnum($data[$field]);
}

//vaid scure
function is_secure(array $data, string $field): bool
{
  if (!isset($data[$field])) {
    return true;
  }
  $pattern = "#.*^(?=.{8,64})(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).*$#";
  return preg_match($pattern, $data[$field]);
}

//db connection
function db(): PDO
{
  static $pdo;
  $servername = DB_HOST;
  $db_name = DB_NAME;
  $username = DB_USER;
  $password = DB_PASSWORD;
  if (!$pdo) {
    $pdo = new PDO("mysql:host=$servername;dbname=$db_name", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $pdo;
  }
  return $pdo;
}

//valid unique
function is_unique(array $data, string $field, string $table, string $column): bool
{
  if (!isset($data[$field])) {
    return true;
  }
  $sql = "SELECT * FROM $table WHERE $column=:value";
  $stmt = db()->prepare($sql);
  $stmt->bindValue(':value', $data[$field]);
  $stmt->execute();
  return $stmt->fetchColumn() === false;
}