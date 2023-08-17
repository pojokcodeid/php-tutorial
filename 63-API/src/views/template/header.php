<?php

// header('access-control-allow-origin: *');
// header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, PATCH');
// header('Access-Control-Allow-Headers: content-type, Authorization, access-control-allow-headers');

header("Access-Control-Allow-Origin: *");
header('content-type: application/json');
header("Access-Control-Allow-Methods: PUT, PATCH, DELETE, GET, POST");
header("Access-Control-Allow-Headers: Authorization, Origin, X-Requested-With, Content-Type, Accept");