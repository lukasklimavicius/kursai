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
<!--Jungiames prie DB-->
<?php
include_once 'src/dbconnect.php';
$sql    = "SELECT id, vardas, email, zinute FROM zinutes";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // issspausdina visas zinutes
    echo "<table><tr><th>Žinutės ID</th><th>Vartotojo vardas</th><th>E-mail</th><th>Žinutės</th></tr>";
    echo "<tr>";
    while ($row = $result->fetch_assoc()) {
        
        foreach ($row as $field => $value) {
            echo "<td>" . $value . "</td>";
        }
        echo "</tr>";
        
    }
    echo "</table>";
} else {
    echo "Nėra žinučių";
}
?>