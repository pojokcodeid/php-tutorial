<?php

$my_var = "title";
$$my_var = "Hello variable variales";

echo $title;

// function view(string $file, array $data)
// {
//     require __DIR__ . "/" . $file;
// }

// view(
//     'inc/home.php',
//     [
//         'title' => 'Home',
//         'heading' => 'Welcome to my homepage'
//     ]
// );

function view(string $file, array $data): void
{
    foreach ($data as $key => $value) {
        $$key = $value;
    }
    require __DIR__ . "/" . $file;
}
view(
    'inc/home.php',
    [
        'title' => 'Home',
        'heading' => 'Welcome to my homepage'
    ]
);