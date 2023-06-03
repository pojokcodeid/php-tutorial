<?php

session_start();

require __DIR__ . '/inc/flash.php';
require __DIR__ . '/inc/header.php';

flash('greeting', 'Process berhasil !', FLASH_SUCCESS);

echo '<a href="page2.php" title="GO TO Page 2">GO TO Page 2</a>';

require __DIR__ . '/inc/footer.php';