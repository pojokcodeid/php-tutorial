<?php

if (isset($_POST['name']) && isset($_POST['email'])) {
    echo "Name: " . $_POST['name'] . '<br>';
    echo "Email: " . $_POST['email'];
}