<?php
// prisijungimas prie DB
    define("DB_SERVER", "localhost");
    define("DB_USER", "root");
    define("DB_PASSWORD", "");
    define("DB_NAME", "autonuoma");

    $mysqli = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);
    if($mysqli->connect_error) {
        echo "Atsiprašome, puslapis susidure su problema \n";
        echo 'Klaida: ' . $mysqli->connect.error . '\n';
        exit();
    }
    

// zinutes idejimas i DB
   mysqli_query($mysqli, "INSERT INTO zinutes (vardas, email, zinute) VALUES('$_POST[vardasFormos]', '$_POST[emailFormos]', '$_POST[zinuteFormos]')");