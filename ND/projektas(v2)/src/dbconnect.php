<!--Prisijungimas prie DB-->
<?php
    $dbServer = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "autonuoma";

    $conn = mysqli_connect($dbServer, $dbUsername, $dbPassword, $dbName);