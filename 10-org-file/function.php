<?php

$title = "Example PHP Include";
$content = "Ini adalah contoh paragraf PHP include";

function dd($data)
{
    echo "<pre>";
    print_r($data);
    echo "</pre>";
    die();
}