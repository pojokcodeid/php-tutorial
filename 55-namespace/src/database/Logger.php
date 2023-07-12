<?php

namespace Store\Databse;

class Logger
{
  public function log($message)
  {
    var_dump('log' . $message . ' di database');
  }
}