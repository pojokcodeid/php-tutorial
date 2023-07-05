<?php 

interface Logger{
  public function log($message);
}

class FileLogger implements Logger{
  private $handle;
  private $logFile;

  public function __construct($logFile, $mode = 'a'){
    $this->logFile = $logFile;
    $this->handle = fopen($logFile, $mode) or die("Unable to open file!");
  }

  public function log($message){
    $message = date('F j, Y, g:i a') . ': ' . $message . "\n";
    fwrite($this->handle, $message);
  }

  public function __destruct(){
    if($this->handle){
      fclose($this->handle);
    }
  }
}
class DabaseLogger implements Logger{
  public function log($message){
    echo sprintf("Log %s to databse \n", $message);
  }
}

$logger = new FileLogger('./log.txt', 'w');
$logger->log('Belajar PHP interface');

$logger =[
  new FileLogger('./log.txt'),
  new DabaseLogger()
];

foreach($logger as $logger){
  $logger->log('Log message');
}