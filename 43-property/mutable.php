<?php

class UserProfile
{
  public function __construct(private string $name, private string $phone)
  {
    $this->name = $name;
    $this->phone = $phone;
  }

  public function changePhone(string $phone)
  {
    $this->phone = $phone;
  }

  public function getPhone()
  {
    return $this->phone;
  }
}

class User
{
  private readonly string $username;
  private readonly UserProfile $profile;

  public function __construct(string $username)
  {
    $this->username = $username;
  }

  public function setProfile(UserProfile $profile)
  {
    $this->profile = $profile;
  }

  public function profile(): UserProfile
  {
    return $this->profile;
  }
}

$user = new User('John');
$user->setProfile(new UserProfile('Jane', '123'));
$user->profile()->changePhone('456');
var_dump($user->profile());
$test = $user->profile();
echo $test->getPhone();