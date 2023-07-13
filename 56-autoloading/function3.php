<?php

function load_model($class_name)
{
  $path_to_file = 'models/' . $class_name . '.php';
  if (file_exists($path_to_file)) {
    require_once $path_to_file;
  }
}

function load_service($class_name)
{
  $path_to_file = 'services/' . $class_name . '.php';
  if (file_exists($path_to_file)) {
    require_once $path_to_file;
  }
}

spl_autoload_register('load_model');
spl_autoload_register('load_service');