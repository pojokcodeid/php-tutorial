<?php

if (filter_has_var(INPUT_POST, 'name')) {
    echo "Name : " . htmlspecialchars($_POST['name']);
} else {
    echo 'Nama harus diisi';
}