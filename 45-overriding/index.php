<?php

class Robot
{
  public function greet()
  {
    return 'Hello';
  }

  final public function id()
  {
    return uniqid();
  }
}

class Android extends Robot
{
  public function greet()
  {
    echo parent::greet();
    echo '<br>';
    return 'Hello Android';
  }

  // public function id()
  // {
  //   return uniqid('Android-');
  // }
}

$robot = new Android();
echo $robot->greet();
echo '<br>';
echo $robot->id();