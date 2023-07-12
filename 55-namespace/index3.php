<?php

require './src/database/Logger.php';
require './src/utils/Logger.php';

// cara 1 mengunakan sebagian 

use Store\Databse;
use Store\Utils;

$logger1 = new Databse\Logger();
$logger1->log('log1');

echo '<br>';
$logger2 = new Utils\Logger();
$logger2->log('log2');

// cara 2 menggunakan alias

use Store\Utils\Logger as ULogger;
use Store\Databse\Logger as DLogger;

$logger1 = new ULogger();
$logger1->log('log1');

echo '<br>';
$logger2 = new DLogger();
$logger2->log('log2');