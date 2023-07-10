<?php

class Str
{
  private $s = '';
  private $functions = [
    'length' => 'strlen',
    'upper' => 'strtoupper',
    'lower' => 'strtolower',
  ];
  public function __construct($s)
  {
    $this->s = $s;
  }

  public function __call($method, $args)
  {
    if (!in_array($method, array_keys($this->functions))) {
      throw new BadMethodCallException();
    }
    array_unshift($args, $this->s);
    return call_user_func_array($this->functions[$method], $args);
  }
}

$s = new Str('hello, World!');
echo $s->upper();
echo $s->lower();
echo $s->length();