# Pernyataan IF

- pernyataan IF memungkinakn kita untuk mengeksekusi pernyataan jika ekspresi bernilai true
- perintah dasarnya

```php
<?php

if ( expression )
    statement;
```

# Pernyataan IF ELSE

- pernyataan IF ELSE memungkinakn kita untuk mengeksekusi pernyataan jika ekspresi bernilai true jika false maksuk ke else
- perintah dasarnya

```php
<?php
if ( expression ) {
    // code block
} else {
    // another code block
}
```
atau :
```php
<?php
if (expression):
	statement;
else :
	statement;
endif;
```
# pernyataan IF ELSE IF
- pernyataan if elseif digunakan untuk percabangan kondisional yang memiliki banyak kondisi, PHP memeriksanya sampai mendapatkan true atau ke pengecualian else 
- perintah dasarnya
```php
<?php
if ( expression ) {
    // code block
} elseif ( expression ) {
    // another code block
} else {
    // another code block
}
```
atau :
```php
<?php
if (expression):
	statement;
elseif (expression2):
	statement;
elseif (expression3):
	statement;
endif;
```