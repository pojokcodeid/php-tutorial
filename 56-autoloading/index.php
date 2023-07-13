<?php

// require_once 'models/Contact.php';

require_once 'function.php';

load_model('Contact');

$contact = new Contact('dN1Vw@example.com');
echo $contact->getEmail();