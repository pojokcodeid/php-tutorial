<?php

class Email
{
  public static function send($contact)
  {
    return 'Send email to' . $contact->getEmail();
  }
}