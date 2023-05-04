# ARRAY
Menurut definisi, array adalah daftar elemen

di PHP ada 2 jenis array

1. Konstruksi array()
```php
<?php
$empty_array = array();
$scores = array(1, 2, 3);
```

2. array sintak [].
```php
<?php
$empty_array = [];
$scores = [1, 2, 3];
```

## Menampilkan Array
```php
<?php
$scores = [1, 2, 3];
var_dump($scores);

echo "<br>";
$scores=array(1,2,3);
print_r($scores);
```

## mengacess element Array 
```php
<?php
$array_name[index]

$scores = [1, 2, 3];
echo $scores[0];

## menambahkan element array
```php
<?php
$scores = [1, 2, 3];
$scores[] = 4;

$scores = [1, 2, 3];
$scores[3] = 4;
```
## Mengubah Element Array
```php
$array_name[index] = $new_element;
<?php

$scores = [1, 2, 3];
$scores[0] = 0;
```

## menghapus element array
```php
<?php
$scores = [1, 2, 3];
unset($scores[0]);
```

## menampilkan panjang array
```php
<?php
$scores = [1, 2, 3];
echo count($scores);
```


