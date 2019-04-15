<?php
// prisijungimas prie DB
define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DB_NAME", "autonuoma");

$conn = new conn(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);
if ($conn->connect_error) {
    echo "Atsiprašome, puslapis susidure su problema \n";
    echo 'Klaida: ' . $conn->connect . error . '\n';
    exit();
}


