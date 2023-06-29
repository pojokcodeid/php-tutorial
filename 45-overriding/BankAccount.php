<?php

class BankAccount
{
  public $balance = 0;

  public function __construct($balance)
  {
    $this->balance = $balance;
  }

  public function getBalance()
  {
    return $this->balance;
  }

  public function deposit($amount)
  {
    if ($amount > 0) {
      $this->balance += $amount;
    }
    return $this;
  }

  public function withdraw($amount)
  {
    if ($amount > 0 && $amount <= $this->balance) {
      $this->balance -= $amount;
      return true;
    }
    return false;
  }
}