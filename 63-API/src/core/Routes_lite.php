<?php


class Routes
{
  private $controllerFile = 'DefaultApp';
  private $contollerMethod = 'index';
  private $parametr = [];

  public function run()
  {
    $url = $this->getUrl();

    // cek file controller
    if ($url && file_exists(__DIR__ . '/../controllers/' . $url[0] . '.php')) {
      $this->controllerFile = $url[0];
      unset($url[0]);
    }
    require_once __DIR__ . '/../controllers/' . $this->controllerFile . '.php';
    // buat objeknya
    $this->controllerFile = new $this->controllerFile;

    // jalankan methodnya
    if (isset($url[1])) {
      if (method_exists($this->controllerFile, $url[1])) {
        $this->contollerMethod = $url[1];
        unset($url[1]);
      }
    }

    // paremter sisanya
    if (!empty($url)) {
      $this->parametr = array_values($url);
    }

    // jalankan contoller dan paran
    call_user_func_array([$this->controllerFile, $this->contollerMethod], $this->parametr);
  }
  private function getUrl()
  {
    $url = rtrim($_SERVER['QUERY_STRING'], "/");
    $url = filter_var($url, FILTER_SANITIZE_URL);
    $url = explode('/', $url);
    return $url;
  }
}