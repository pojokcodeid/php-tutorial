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