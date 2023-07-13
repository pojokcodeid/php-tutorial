<?php

require_once './function3.php';

$contact = new Contact('dN1Vw@example.com');
echo Email::send($contact);