<?php

/**
 * Connect to the database and returns an instance of PDO class
 * or false if the connection fails
 *
 * @return PDO
 */
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