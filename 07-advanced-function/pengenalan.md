# Anonymous functions 
Anonimous function adalah fungsi yang tidak memiliki nama dan dapat didefinisikan sebagai ekspresi
Anonimous function biasanya digunakan sebagai nilai dari parameter yang dapat dipanggil, seperti pada fungsi-fungsi seperti array_filter, array_map, preg_replace_callback, usort, dll

```php
// Membuat anonimous function dan menetapkannya pada variabel $greet
$greet = function($name) {
    echo "Halo $name\n";
};

// Memanggil anonimous function
$greet("Budi"); // output: Halo Budi

// Membuat anonimous function dengan arrow function
$greet = fn($name) => "Halo $name\n";

// Memanggil anonimous function
echo $greet("Andi"); // output: Halo Andi

// Menggunakan anonimous function sebagai callback untuk array_map
$arr = [1, 2, 3];
$arr_double = array_map(fn($x) => $x * 2, $arr); // mengalikan setiap elemen array dengan 2
print_r($arr_double); // output: Array ( [0] => 2 [1] => 4 [2] => 6 )
```

# ARROW FUNCTION
Arrow function adalah fitur baru yang ada pada PHP 7.4 yang merupakan versi singkat dari sintaks fungsi anonim yang mereturn sebuah nilai tertentu

Arrow function memiliki bentuk dasar fn (argument_list) => expr
Arrow function mendukung fitur yang sama dengan fungsi anonim, kecuali bahwa penggunaan variabel dari lingkup induk selalu otomatis.
```php
fn (arguments) => expression;
//sama dengan 
function(arguments) { return expression; }
```

# VARIABLE FUNCTION
variable function adalah cara yang memungkinakn kita untuk menggunakan variable seperti function. Saat Anda menambahkan tanda kurung ()ke variabel, PHP akan mencari fungsi yang namanya sama dengan nilai variabel dan menjalankannya. Misalnya:
```php
$f = 'strlen';
echo $f('Hello'); // strlen(Hello)
```

