<?php

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    require 'inc/get.php';
} else {
    require 'inc/post.php';
}