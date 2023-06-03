<?php

session_start();

require __DIR__ . '/inc/flash.php';
require __DIR__ . '/inc/header.php';

flash('greeting');

require __DIR__ . '/inc/footer.php';