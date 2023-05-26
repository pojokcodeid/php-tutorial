# Form
Untuk membuat formulir, Anda menggunakan <form>elemen sebagai berikut:
```php
<form action="form.php" method="post">
</form>
```
Elemen <form>memiliki dua atribut penting:

- action: menentukan URL yang memproses pengiriman formulir. Dalam contoh ini, form.phpakan memproses formulir.
- method: menentukan metode HTTP untuk mengirimkan formulir. Metode formulir yang paling umum digunakan adalah POSTdan GET. Dalam contoh ini, metode formulir adalah post.

## Metode HTTP POST
Jika formulir menggunakan POSTmetode ini, browser web akan menyertakan data formulir di badan permintaan HTTP. Setelah mengirimkan formulir, Anda dapat mengakses data formulir melalui array asosiatif $_POST di PHP.
```php
if(isset($_POST['email']) {
    // process email
}
```
## Metode HTTP GET
Saat Anda mengirimkan formulir menggunakan GETmetode ini, Anda dapat mengakses data formulir di PHP melalui associative array $_GET.

Berbeda dengan POSTmetode, GETmetode menambahkan data formulir di URL yang memproses formulir.
```
http://localhost/form.php?email=hello%40phptutorial.net
```
```php
if(isset($_GET['email']) {
    // process email
}
```