<?php

require_once 'function2.php';

$contat = new Contact('dN1Vw@example.com');
echo $contat->getEmail();