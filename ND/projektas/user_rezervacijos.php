<?php session_start() ?>
<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auto nuoma</title>
    <script src="https://code.jquery.com/jquery-3.3.0.min.js"></script>
    <style>
        table, th, tr, td {
            border: 1px solid green;
            background-color: #FDB85E;
            border-radius: 3px;
        }
        p {
           font-size: 20px; 
        }
        .submitButton {
            box-shadow: inset 0px 0px 10px -1px #fce2c1;
            background: linear-gradient(to bottom, #ffc477 5%, #fb9e25 100%);
            background-color:#ffc477;
            border-radius:10px;
            border: 1px solid #e89c19;
            cursor: pointer;
            color: #ffffff;
            font-family: Arial;
            font-size: 15px;
            font-weight: bold;
            padding: 11px 33px;
            text-shadow: 3px 2px 0px #cc9f52;
        }
        #table tr > td:last-child {
            display: none;
        }
    </style>
</head>

<body>
    

<!--Jungimasis prie DB-->
<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "autonuoma";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Klaidos kodas: " . $conn->connect_error);
    } 
    // paselectinam visus rezervacijos duomenis
    $sql = "SELECT rez_id, rez_car, rez_start_date, rez_start_time, rez_end_date, rez_end_time, rez_username FROM rezervacijos";
    $result = $conn->query($sql);
    // spausdinam tik to vartotojo registracijas
    if ($result->num_rows > 0) {
        echo '<table id="table"><tr><th>Rezervacijos numeris</th><th>Automobilis</th><th>Rezervacijos pradžios data</th><th>Rezervacijos pradžios laikas</th><th>Rezervacijos pabaigos data</th><th>Rezervacijos pabaigos laikas</th></tr>';
        echo '<tr>';
        while($row = $result->fetch_assoc()) {
            foreach ($row as $field => $value) {
                if ($_SESSION['u_username'] == $row['rez_username']) {
            echo "<td onclick='delete_row($(this))'>" . $value . "</td>"; 
                    }
    }
    echo "</tr>";
    
        }
        echo "</table>";
}
    else {
        echo "Nėra rezervacijų";
    }
        
        if(isset($_POST['submit'])){
            $userid = mysqli_real_escape_string($conn, $_POST['idnr']);
        $delete = "DELETE FROM rezervacijos WHERE rez_id = '$userid'";
        mysqli_query($conn, $delete);
        header("Location: user_rezervacijos.php?delete=success");
        exit();
            }
    $conn->close();
?>
    <script>
       
        var table = document.getElementById('table');
        
        for (var i=1; i < table.rows.length; i++) {
            table.rows[i].onclick = function ()
            {
            document.getElementById("idnr").value = this.cells[0].innerHTML;
            var id = document.getElementById("idnr").value;
            // turetu istrinti is DB atsaukta registracija
                
                
            };
        }
        function delete_row(row) {
            row.closest('tr').remove();
     }
    </script>
    <p>Jei norite atšaukti rezervaciją, tiesiog paspauskite ant rezervacijos eilutės</p>
    <form action="user_rezervacijos.php" method="post">
        <input type="text" name="idnr" id="idnr" hidden>
        <input class="submitButton" type="submit" name="submit" value="Atšaukti registraciją">
        <a href="user"><button class="submitButton">Neatšaukti registracijos</button></a>
    </form>