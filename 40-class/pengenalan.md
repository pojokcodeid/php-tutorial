# OOP
Objek oriented programming di PHP adalah paradigma pemrograman yang berdasarkan pada konsep objek, yaitu entitas yang memiliki properti (atribut) dan perilaku (metode). Objek oriented di PHP memungkinkan kita untuk menyusun program yang terdiri dari komponen-komponen yang dapat digunakan kembali (reusable) dan mudah dimodifikasi.

Beberapa fitur objek oriented di PHP adalah:
- **Kelas**. Kelas adalah cetak biru atau rancangan untuk membuat objek. Kelas dapat memiliki properti dan metode yang mendefinisikan karakteristik dan perilaku objek. Kelas dapat dibuat dengan kata kunci **class**.

```php
class MyClass
{
  // ...
  $variable1;
  $variable2;

  public function method(){
    // ...
  }
}

$variable=new MyClass();
$variable->method();
```