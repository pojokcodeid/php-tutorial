# Pengertian
- konstanta adalah nama yang menyimpan suatu nilai yang tidak dapat diubah selama eksekusi

# Pendefinisian
- untuk mendefinisikan kkonstanta gunakan define()
- contoh 
```
<?php
define('WIDTH','1140px');
echo WIDTH;
```
- penulisan konstanta bakunya adalah huruf besar beda dengan variable
- konstanta tidak dimulai dengan symbol dolar
- secara default konstata case sensitive 
- sejak versi 7 keatas konstanta bisa menyimpan array

# Kata kunci const
- PHP memberikan cara lain untuk mendefinikan konstanta yaitu dengan kuncu const
const CONSTANT_NAME = value;

# Perbedaan define dan const
- define adalah fungsi, sedangkan const adalah konstruksi bahasa.
- define mendefinisikan konstanta pada saat runtime.
- sedangkan const mendefinisikan konstanta pada waktu kompilasi.
- dengan kata lain kita bisa mengunakan define() dalam konditional
- namun tidak untuk sebaliknya

