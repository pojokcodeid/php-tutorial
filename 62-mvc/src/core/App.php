<?php


class App
{
  private $controllerFile = 'DefaultApp';
  private $contollerMethod = 'index';
  private $parametr = [];

  private const DEFULT_GET = 'GET';
  private const DEFULT_POST = 'POST';
  private $handlers = [];

  public function setDefaultController($controller)
  {
    $this->controllerFile = $controller;
  }

  public function setDefaultMethod($method)
  {
    $this->contollerMethod = $method;
  }

  public function get($uri, $callback)
  {
    $this->setHandler(self::DEFULT_GET, $uri, $callback);
  }

  public function post($uri, $callback)
  {
    $this->setHandler(self::DEFULT_POST, $uri, $callback);
  }

  private function setHandler(string $method, string $path, $handler)
  {
    $this->handlers[$method . $path] = [
      'path' => $path,
      'method' => $method,
      'handler' => $handler,
    ];
  }

  public function run()
  {
    $execute=0;
    $url = $this->getUrl();
    $requestMethod = $_SERVER['REQUEST_METHOD'];
    foreach ($this->handlers as $handler) {
      // cek url dengan route
      $path = explode('/', rtrim(ltrim($handler['path'], '/'), '/'));
      $kurl = (isset($url[0]) ? $url[0] : "") . (isset($url[1]) ? $url[1] : "");
      $kpath = (isset($path[0]) ? $path[0] : "") . (isset($path[1]) ? $path[1] : "");
      //set custom controller objek
      if ($kurl != "" && $kurl == $kpath && $requestMethod == $handler['method']) {
        if (isset($handler['handler'][0]) && file_exists(__DIR__ . '/../controllers/' . $handler['handler'][0] . '.php')) {
          $this->controllerFile = $handler['handler'][0];
          unset($url[0]);
        }
        // create objeknya
        require_once __DIR__ . '/../controllers/' . $this->controllerFile . '.php';
        $this->controllerFile = new $this->controllerFile;
        $execute=1;
        if (isset($handler['handler'][1]) && method_exists($this->controllerFile, $handler['handler'][1])) {
          $this->contollerMethod = $handler['handler'][1];
          unset($url[1]);
        }
      }
    }

    // buat objeknya
    if ($execute == 0) {
      require_once __DIR__ . '/../controllers/' . $this->controllerFile . '.php';
      $this->controllerFile = new $this->controllerFile;
    }

    // paremter sisanya
    if (!empty($url)) {
      $this->parametr = array_values($url);
    }

    // jalankan contoller dan param
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