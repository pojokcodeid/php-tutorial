<?php

session_start();

require './inc/header.php';
require './inc/function.php';

$donat_toppings = [
  'Coklat' => 3500,
  'Strawberry' => 4000,
  'Keju' => 4000,
  'Mango' => 4500,
  'Kacang' => 3000,
];

$request_method = $_SERVER['REQUEST_METHOD'];
if ($request_method === "GET") {
  require './inc/get.php';
} elseif ($request_method === "POST") {
  require './inc/post.php';
}

require './inc/footer.php';