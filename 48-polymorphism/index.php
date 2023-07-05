<?php

abstract class Person
{
  abstract public function greet();
}

class English extends Person
{
  public function greet()
  {
    echo "Hello";
  }
}

class German extends Person
{
  public function greet()
  {
    echo "Hallo !";
  }
}

class Francis extends Person
{
  public function greet()
  {
    echo "Guten Tag";
  }
}

function greeting($people)
{
  foreach ($people as $p) {
    echo $p->greet() . '<br>';
  }
}

$people = [
  new English(),
  new German(),
  new Francis(),
];

greeting($people);

class American extends Person
{
  public function greet()
  {
    echo "Hai...";
  }
}

$people = [
  new English(),
  new German(),
  new American(),
  new Francis(),
];

greeting($people);


interface Animal
{
  public function makesound();
}

class Cat implements Animal
{
  public function makesound()
  {
    echo "meow";
  }
}

class Dog implements Animal
{
  public function makesound()
  {
    echo "woof";
  }
}

class Mouse implements Animal
{
  public function makesound()
  {
    echo "moo";
  }
}

$cat = new Cat();
$dog = new Dog();
$mouse = new Mouse();
$animals = array($cat, $dog, $mouse);

foreach ($animals as $a) {
  $a->makesound();
  echo '<br>';
}