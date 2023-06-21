<?php
// delete file
$filename = "./file/readme.txt";
if (unlink($filename)) {
  echo "file berhasil di hapus";
} else {
  echo "file gagal di hapus";
}

$dif = "file/";
array_map('unlink', glob("{$dif}*.txt"));
array_map('unlink', glob("{$dif}*.*"));

// rename file
$oldname = "file/file.bak";
$newname = "file/file.txt";

if (rename($oldname, $newname)) {
  echo "file berhasil di rename";
} else {
  echo "file gagal di rename";
}

//rename dan move
$oldname = "./file/file.txt";
$newname = "./public/file2.txt";

if (rename($oldname, $newname)) {
  echo "file berhasil di rename";
} else {
  echo "file gagal di rename";
}

function rename_file(string $pattern, string $search, string $replace): array
{
  $paths = glob($pattern);
  $result = [];
  foreach ($paths as $path) {
    if (!is_file($path)) {
      $result[$path] = false;
      continue;
    }

    $dirname = dirname($path);
    $filename = basename($path);
    $newpath = $dirname . '/' . str_replace($search, $replace, $filename);
    if (file_exists($newpath)) {
      $result[$path] = false;
      continue;
    }
    $result[$path] = rename($path, $newpath);
  }
  return $result;
}

rename_file('file/*.md', '.md', '.html');