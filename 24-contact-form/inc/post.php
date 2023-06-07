<?php

// check the honeypot
$honeypot = isset($_POST['nickname']) ? $_POST['nickname'] : '';
$honeypot = strip_tags($honeypot);
$honeypot = trim(preg_replace('/[^A-Za-z0-9 ]/', '', $honeypot));
if ($honeypot) {
  header($_SERVER['SERVER_PROTOCOL'] . ' 405 Method Not Allowed');
  exit;
}

// validate name
$name = isset($_POST['name']) ? $_POST['name'] : '';
$name = strip_tags($name);
$name = trim(preg_replace('/[^A-Za-z0-9 ]/', '', $name));
$inputs['name'] = $name;
if (!$name || trim($name) === '') {
  $errors['name'] = 'Please enter your name';
}

// validate email
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$inputs['email'] = $email;
if ($email) {
  $email = filter_var($email, FILTER_SANITIZE_EMAIL);
  if (!$email) {
    $errors['email'] = 'Please enter a valid email';
  }
} else {
  $errors['email'] = 'Please enter an email';
}

// validate subject
$subject = isset($_POST['subject']) ? $_POST['subject'] : '';
$subject = strip_tags($subject);
$subject = trim(preg_replace('/[^A-Za-z0-9 ]/', '', $subject));
$inputs['subject'] = $subject;
if (!$subject || trim($subject) === '') {
  $errors['subject'] = 'Please enter the subject';
}

// validate message
$message = isset($_POST['message']) ? $_POST['message'] : '';
$message = strip_tags($message);
$message = trim(preg_replace('/[^A-Za-z0-9 ]/', '', $message));
$inputs['message'] = $message;
if (!$message || trim($message) === '') {
  $errors['message'] = 'Please enter the message';
}