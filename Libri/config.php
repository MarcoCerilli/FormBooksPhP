<?php

$servername = "localhost";
$username = "root";
$password = "Reddino24!";
$dbname = "biblioteca";
$database = new mysqli($servername, $username, $password, $dbname);

if ($database->connect_error) {
    echo "Connessione fallita: " . $database->connect_error;
    exit();
}

// Imposta il charset per evitare problemi di encoding
$database->set_charset('utf8mb4');


?>

    