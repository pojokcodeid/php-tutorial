<?php

class User
{
  public readonly string $username;
  public function __construct($username)
  {
    $this->username = $username;
  }

  public function setUser($username)
  {
    $this->username = $username;
  }
}

$user = new User("John");
$user->setUser("Jane");
echo $user->username;