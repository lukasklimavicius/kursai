<?php
// rezervacijos idejimas i DB
session_start();
   if(isset($_POST['rezervuoti'])) {
       include_once 'dbforlogin.php';
       $masina = mysqli_real_escape_string($conn, $_POST['masina']);
       $prdata = mysqli_real_escape_string($conn, $_POST['pradziaData']);
       $prlaikas = mysqli_real_escape_string($conn, $_POST['pradziaLaikas']);
       $pbdata = mysqli_real_escape_string($conn, $_POST['pabaigaData']);
       $pbLaikas = mysqli_real_escape_string($conn, $_POST['pabaigaLaikas']);
       $vardas = mysqli_real_escape_string($conn, $_POST['vardas']);
       $telefonas = mysqli_real_escape_string($conn, $_POST['telefonas']);
       
       if (empty($masina) || empty($prdata) || empty($prlaikas) || empty($pbdata) || empty($pbLaikas) || empty($vardas) || empty($telefonas)) {
            header("Location: ../index.php?booking=empty");
            exit();
       } else {
                $useris = $_SESSION['u_username'];
                mysqli_query($conn, "INSERT INTO rezervacijos (rez_car, rez_start_date, rez_start_time, rez_end_date, rez_end_time, rez_name, rez_number, rez_username) VALUES('$masina', '$prdata', '$prlaikas', '$pbdata', '$pblaikas', '$vardas', '$telefonas', '$useris')");
                header("Location: ../index.php?booking=success");
                exit();
                }
    } else {
       header("Location: ../index.php");
       exit();
    }