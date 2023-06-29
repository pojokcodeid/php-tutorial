<?php

require_once 'BankAccount.php';

class CheckingAccount extends BankAccount
{

  private $minBalance = 0;
  public function __construct($balance, $minBalance)
  {
    if ($balance > 0 && $balance >= $minBalance) {
      parent::__construct($balance);
      $this->minBalance = $minBalance;
    } else {
      throw new InvalidArgumentException("Balance must be greater than 0");
    }

  }

  public function withdraw($amount)
  {
    $canWithdraw = $amount > 0 && $this->getBalance() - $amount > $this->minBalance;
    if ($canWithdraw) {
      parent::withdraw($amount);
      return true;
    }
    return false;
  }

  public function getMinBalance()
  {
    return $this->minBalance;
  }
}

$check = new CheckingAccount(100, 90);
echo 'Balance saat ini : ' . $check->getBalance() . '<br>';
if ($check->withdraw(9)) {
  echo 'Withdraw berhasil';
} else {
  echo 'Withdraw gagal';
}

echo '<br>';
echo 'Min Balance : ' . $check->getMinBalance();
echo '<br>';
echo 'Balance saat ini : ' . $check->getBalance();