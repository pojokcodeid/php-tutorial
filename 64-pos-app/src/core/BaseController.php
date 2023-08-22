<?php

namespace MyApp\Core;

class BaseController extends Filter
{
  public function view($view, $data = [], $return = false)
  {
    if (count($data)) {
      extract($data);
    }
    ob_start();
    require_once '../src/views/' . $view . '.php';
    if ($return) {
      return ob_get_clean();
    }
  }

  public function redirect($url)
  {
    header('Location: ' . BASEURL . '/' . ltrim($url, '/'));
    exit;
  }

  public function model($model)
  {
    // require_once '../src/models/' . $model . '.php';
    return new $model;
  }
}