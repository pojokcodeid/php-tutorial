<?php

class NamaClass
{
  //isinya
}

$myObjek = new class {
  //isinya
};

$logger = new class {
  public function log(string $message)
  {
    echo $message . '<br>';
  }
};

$logger->log('halo');
echo get_class($logger);

interface Logger
{
  public function log(string $message): void;
}

$logger2 = new class implements Logger {
  public function log(string $message): void
  {
    echo $message . '<br>';
  }
};

echo '<br>';
$logger2->log('halo 2');
echo $logger2 instanceof Logger;

function save(Logger $logger)
{
  $logger->log('Berhasil di update');
}

save($logger2);

interface Logger2
{
  public function log(string $message): void;
}

abstract class SimpleLogger implements Logger2
{
  protected $newLine;

  public function __construct(bool $newLine)
  {
    $this->newLine = $newLine;
  }
  abstract public function log(string $message): void;
}

$logger3 = new class (true) extends SimpleLogger {

  public function __construct(bool $newLine)
  {
    parent::__construct($newLine);
  }
  public function log(string $message): void
  {
    echo $this->newLine ? $message . PHP_EOL : $message;
  }
};

$logger3->log('halo');
$logger3->log('Bye');