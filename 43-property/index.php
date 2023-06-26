<?php
declare(strict_types=1);
class BankAccount
{
  public float $balance;

  public function __construct($balance = 0)
  {
    $this->balance = $balance;
  }

}

$account = new BankAccount();
$account->balance = 100;
var_dump($account->balance);