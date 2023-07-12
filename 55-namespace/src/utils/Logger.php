<?php

namespace Store\Utils;

class Logger
{
  public function log($message)
  {
    var_dump('log' . $message . ' di utils');
  }
}