<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: PUT, PATCH, DELETE, GET, POST");
header("Access-Control-Allow-Headers: Authorization, Origin, X-Requested-With, Content-Type, Accept");
$data = [
  "message" => "Hello World"
];
echo json_encode($data);