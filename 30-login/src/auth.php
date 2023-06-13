<?php
/**
 * Register a user
 *
 * @param string $email
 * @param string $username
 * @param string $password
 * @param bool $is_admin
 * @return bool
 */
function register_user(string $email, string $username, string $password, bool $is_admin = false): bool
{
  $sql = 'INSERT INTO users(username, email, password, is_admin)
VALUES(:username, :email, :password, :is_admin)';

  $statement = db()->prepare($sql);

  $statement->bindValue(':username', $username, PDO::PARAM_STR);
  $statement->bindValue(':email', $email, PDO::PARAM_STR);
  $statement->bindValue(':password', password_hash($password, PASSWORD_BCRYPT), PDO::PARAM_STR);
  $statement->bindValue(':is_admin', (int) $is_admin, PDO::PARAM_INT);


  return $statement->execute();
}

function find_user_by_username(string $username)
{
  $sql = 'SELECT username, password FROM users WHERE username=:username';
  $statement = db()->prepare($sql);
  $statement->bindValue(':username', $username, PDO::PARAM_STR);
  $statement->execute();

  return $statement->fetch(PDO::FETCH_ASSOC);
}

function login(string $username, string $password): bool
{
  $user = find_user_by_username($username);
  if ($user && password_verify($password, $user['password'])) {
    session_regenerate_id();
    $_SESSION['username'] = $user['username'];
    $_SESSION['user_id'] = $user['id'];

    return true;
  }
  return false;
}

function is_user_logged_in(): bool
{
  return isset($_SESSION['username']);
}

function require_login(): void
{
  if (!is_user_logged_in()) {
    redirect_to('login.php');
  }
}

function logout(): void
{
  if (is_user_logged_in()) {
    unset($_SESSION['username'], $_SESSION['user_id']);
    session_destroy();
    redirect_to('login.php');
  }
}

function current_user()
{
  if (is_user_logged_in()) {
    return $_SESSION['username'];
  }
  return null;
}