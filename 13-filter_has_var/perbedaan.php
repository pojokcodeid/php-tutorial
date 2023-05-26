<?php
$_POST['name'] = 'POJOK CODE';
if (isset($_POST['name'])) {
    echo "Name : " . htmlspecialchars($_POST['name']) . '<br>';
} else {
    echo 'Nama harus diisi isset<br>';
}

if (filter_has_var(INPUT_POST, 'name')) {
    echo "Name : " . htmlspecialchars($_POST['name']) . '<br>';
} else {
    echo 'Nama harus diisi filter has var<br>';
}