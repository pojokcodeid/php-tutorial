<?php

// $filename = "./file/template.txt";

// if (file_exists($filename)) {
//   header('Content-Description: File Transfer');
//   header('Content-Type: application/octet-stream');
//   header('Content-Disposition: attachment; filename=' . basename($filename));
//   header('Expires: 0');
//   header('Cache-Control: must-revalidate');
//   header('Pragma: public');
//   header('Content-Length: ' . filesize($filename));
//   readfile($filename);
//   exit;
// }

$file_to_download = './file/node.msi';
$client_file = 'MyNoideFile.msi';

$download_rate = 20000; // 200kb/s

$f = null;
try {
  if (!file_exists($file_to_download)) {
    throw new Exception("File not found");
  }
  if (!is_file($file_to_download)) {
    throw new Exception("Not a file");
  }

  header('Cache-control: private');
  header('Content-Type: application/octet-stream');
  header('Content-Length: ' . filesize($file_to_download));
  header('Content-Disposition: filename=' . $client_file);

  flush();
  $f = fopen($file_to_download, 'r');
  while (!feof($f)) {
    print fread($f, round($download_rate * 1024));
    flush();
    sleep(1);
  }

} catch (\Throwable $e) {
  echo $e->getMessage();
} finally {
  fclose($f);
}