<?php

require './src/model/Customer.php';
require './src/model/Product.php';

// cara 1 import dengan class name
// use Store\Model\Customer;
// use Store\Model\Product;

use Store\Model\{Customer, Product};

$product = new Product();
$customer = new Customer('John');
echo $customer->getName();