<?php

function kuadrat($n)
{
    return ($n * $n);
}

$a = [1, 2, 3, 4, 5];
$b = array_map("kuadrat", $a);

echo '<pre>';
print_r($b);
echo '</pre>';
echo '<br>';

class User
{
    public $id;
    public $username;
    public $email;

    public function __construct(int $id, string $username, string $email)
    {
        $this->id = $id;
        $this->username = $username;
        $this->email = $email;
    }
}

$users = [
    new User(1, 'admin', 'admin@admin'),
    new User(2, 'user', 'user@user'),
    new User(3, 'guest', 'guest@guest')
];
$username = array_map(
    fn($user) => $user->username,
    $users
);
echo '<pre>';
print_r($username);
echo '</pre>';
echo '<br>';

class Squere
{
    public static function area($length)
    {
        return $length * $length;
    }
}
$lengths = [10, 20, 30];
$areas = array_map('Squere::area', $lengths);
echo '<pre>';
print_r($areas);
echo '</pre>';
echo '<br>';

# ARRAY FILTER 
function ganjil($var)
{
    return $var & 1;
}

$a = [1, 2, 3, 4, 5];
$b = array_filter($a, 'ganjil');
echo '<pre>';
print_r($b);
echo '</pre>';
echo '<br>';

class Odd
{
    public function isOdd($num)
    {
        return $num % 2 !== 1;
    }
}
$numbers = [1, 2, 3, 4, 5];
$odd_numbers = array_filter($numbers, [new Odd(), 'isOdd']);
echo '<pre>';
print_r($odd_numbers);
echo '</pre>';
echo '<br>';

class Positive
{
    public function __invoke($number)
    {
        return $number > 0;
    }
}
$numbers = [-1, -2, 0, 1, 2, 3];
$positives = array_filter($numbers, new Positive());
echo '<pre>';
print_r($positives);
echo '</pre>';
echo '<br>';

# ARRAY REDUCE
function jumlah($v1, $v2)
{
    return $v1 + $v2;
}

$a = [10, 20, 30];
$b = array_reduce($a, 'jumlah', 0);
echo '<pre>';
print_r($b);
echo '</pre>';
echo '<br>';

$carts = [
    ['item' => 'A', 'qty' => 2, 'price' => 100],
    ['item' => 'B', 'qty' => 3, 'price' => 200],
    ['item' => 'C', 'qty' => 4, 'price' => 300]
];
$total = array_reduce($carts, function ($prev, $item) {
    return $prev + $item['price'] * $item['qty'];
});
echo '<pre>';
print_r($total);
echo '</pre>';
echo '<br>';