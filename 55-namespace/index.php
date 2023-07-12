<?php

require './src/model/Customer.php';
// 1. menulisakan inline class
$customer = new Store\Model\Customer('John');
echo $customer->getName();

echo '<br>';
// 2. menggunakan use sebagian
use Store\Model;

$customer = new Model\Customer('John');
echo $customer->getName();

echo '<br>';
// 3. menggunakan namespace
use Store\Model\Customer;

$customer = new Customer('John');
echo $customer->getName();
echo '<br>';
// menggunakan alias
use \Store\Model\Customer as Cus;

$customer = new Cus('John');
echo $customer->getName();