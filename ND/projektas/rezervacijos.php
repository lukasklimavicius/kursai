<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auto nuoma</title>
    <link href="css/style.css" type="text/css" rel="stylesheet">
    <style>
    table, th, tr, td {
            border: 1px solid green;
            background-color: #FDB85E;
            border-radius: 3px;
            margin: 20px;
        }
    </style>
</head>

<body>
    
</body>
</html>
<!--Jungimasis prie db-->
<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "autonuoma";

// Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
    if ($conn->connect_error) {
        die("Nepavyko prisijungti, klaida: " . $conn->connect_error);
    } 
    // paselectinam visus rezervacijos duomenis
    $sql = "SELECT rez_id, rez_car, rez_start_date, rez_start_time, rez_end_date, rez_end_time, rez_name, rez_number FROM rezervacijos";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
    // atspausdinam juos į lentelę
        echo "<table><tr><th>Rezervacijos ID</th><th>Automobilis</th><th>Rez. pradžios data</th><th>Rez. pradžios laikas</th><th>Rez. pabaigos data</th><th>Rez. pabaigos laikas</th><th>Vartotojo vardas</th><th>Telefono numeris</th></tr>";
        echo "<tr>";
        while($row = $result->fetch_assoc()) {
            
            foreach ($row as $field => $value) {
            echo "<td>" . $value . "</td>"; 
    }
    echo "</tr>";
    
        }
        echo "</table>";
}
    else {
        echo "Nėra rezervacijų";
    }
    $conn->close();
?>