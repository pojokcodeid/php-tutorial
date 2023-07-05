<?php

trait message1
{
  public function message1()
  {
    echo "message1";
  }
}

class Welcome
{
  use message1;
}

$welcome = new Welcome();
$welcome->message1();

echo '<br>';


trait message2
{
  public function message2()
  {
    echo "message2";
  }
}

trait message3
{
  public function message3()
  {
    echo "message3";
  }
}

class Welcome2
{
  use message2, message3;
}

$welcome2 = new Welcome2();
$welcome2->message2();
$welcome2->message3();

trait Reader
{
  public function read($source)
  {
    echo "saya suka membaca" . $source;
  }
}

trait Writer
{
  public function write($destination)
  {
    echo "saya suka menulis" . $destination;
  }
}

trait Copier
{
  use Reader, Writer;

  public function copy($source, $destination)
  {
    $this->read($source);
    $this->write($destination);
  }
}

class FileUtil
{
  use Copier;
  public function copyFile($source, $destination)
  {
    $this->copy($source, $destination);
  }
}

echo '<br>';
$fileUtil = new FileUtil();
$fileUtil->copyFile("file.txt", "file_copy.txt");
echo '<br>';
$fileUtil->read("file_copy.txt");
$fileUtil->write("file_copy.txt");