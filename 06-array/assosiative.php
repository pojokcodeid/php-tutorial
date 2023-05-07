<?php

$contacts = array(
    "Ali" => "ali@gmail.com",
    "Ahmed" => "ahmed@gmail.com",
    "Sara" => "sara@gmail.com",
    "Cici" => "cici@gmail.com"
);

foreach ($contacts as $name => $email) {
    echo $name . " " . $email . "<br>";
}

$contacts["Dedi"] = "dedi@gmail.com";

# menghapus element
unset($contacts["Ali"]);

echo "<br>";
foreach ($contacts as $name => $email) {
    echo $name . " " . $email . "<br>";
}

#mengurutkan array
ksort($contacts);
echo '<br>';
foreach ($contacts as $name => $email) {
    echo $name . " " . $email . "<br>";
}