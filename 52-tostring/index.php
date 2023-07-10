<?php
declare(strict_types=0);
class BankAccount
{
  private $accountNumber;
  private $balance;

  public function __construct($accountNumber, $balance)
  {
    $this->accountNumber = $accountNumber;
    $this->balance = $balance;
  }

  public function __toString()
  {
    return "Account Number: " . $this->accountNumber . " Balance: " . $this->balance;
  }
}

$account = new BankAccount(1234, 1000);
echo $account;
echo '<br>';
class Quarter
{
  private $number;

  public function __construct($number)
  {
    if ($number < 0 && $number > 4) {
      throw new InvalidArgumentException("Invalid number");
    }
    $this->number = $number;
  }

  public function __toString()
  {
    return $this->number;
  }
}

$quarter = new Quarter(5);
echo $quarter;