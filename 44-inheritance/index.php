<?php
class BankAccount
{
  private float $balance;

  public function __construct(float $balance)
  {
    $this->balance = $balance;
  }

  public function getBalance(): float
  {
    return $this->balance;
  }

  public function deposit(float $amount): float
  {
    if ($amount > 0) {
      $this->balance += $amount;
    }
    return $this->balance;
  }

}


class SavingAccount extends BankAccount
{
  private float $interestRate;
  public function __construct(float $balance)
  {
    parent::__construct($balance);
    $this->interestRate = 0.0;
  }

  public function addInterestDate(): void
  {
    $interest = $this->getBalance() * $this->interestRate;
    $this->deposit($interest);
  }

  public function setInterest(float $interest): void
  {
    $this->interestRate = $interest;
  }
}

$bank = new SavingAccount(100);
$bank->deposit(100);
echo $bank->getBalance();
$bank->setInterest(0.1);
$bank->addInterestDate();
echo '<br>';
echo $bank->getBalance();