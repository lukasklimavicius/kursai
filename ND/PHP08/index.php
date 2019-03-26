<?php 
    $temp = [4, 3, 9, 19, 19, 9, 12, 20, 24, 20, 12, 14, 18, 21, 20, 23, 16, 16, 15, 19, 19, 17, 17, 15, 12, 13, 13, 15, 19, 21];
    $suma = 0;
    for ($i=0; $i<count($temp); $i++) {
        $suma+=$temp[$i];
    }
    echo 'Vidutinė temperatūra:' .$suma/count($temp). '<br>';
    asort($temp);
    $silciausios = array_slice($temp, -5, 5);
    echo 'Šilčiausios temperatūros: ';
    for ($i=0; $i<count($silciausios); $i++) {
        if ($i!=count($silciausios)-1) {
            if ($silciausios[$i]!=$silciausios[$i+1]) {
                echo $silciausios[$i]. ' ';
            }
        } else {echo $silciausios[$i]. ' ';}
    }
    echo '<br>';
    $salciausios = array_slice($temp, 5, 5);
    echo 'Šalčiausios temperatūros: ';
    for ($i=0; $i<count($salciausios); $i++) {
        if ($i!=count($salciausios)-1) {
            if ($salciausios[$i]!=$salciausios[$i+1]) {
                echo $salciausios[$i]. ' ';
            }
        } else {echo $salciausios[$i]. ' ';}
    }
?>

