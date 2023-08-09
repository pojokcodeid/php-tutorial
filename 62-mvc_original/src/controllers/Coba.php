<?php

class Coba
{
  public function index()
  {
    echo "Hello World percobaan";
  }

  public function param1($param)
  {
    echo "Hello World percobaan " . $param;
  }
  public function param2($param, $param2, $param3)
  {
    echo "Hello World percobaan " . $param . " - " . $param2 . " - " . $param3;
  }
}