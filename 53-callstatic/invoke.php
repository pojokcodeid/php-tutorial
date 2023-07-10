<?php

class MyClass
{
  public function __invoke()
  {
    echo 'Called invoke method';
  }
}

$instance = new MyClass();
$instance();

class Comparator
{
  private $key;
  public function __construct($key)
  {
    $this->key = $key;
  }
  public function __invoke($a, $b)
  {
    return $a[$this->key] <=> $b[$this->key];
  }
}

$customer = [
  ['id' => 1, 'name' => 'John', 'credit' => 100],
  ['id' => 2, 'name' => 'Jane', 'credit' => 200],
  ['id' => 3, 'name' => 'Jack', 'credit' => 300],
];

echo '<br>';
usort($customer, new Comparator('credit'));
echo '<pre>';
print_r($customer);
echo '</pre>';

echo '<br>';
usort($customer, new Comparator('name'));
echo '<pre>';
print_r($customer);
echo '</pre>';