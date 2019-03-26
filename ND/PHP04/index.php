<?php 
    $cities = ['Berlynas', 'Roma', 'Londonas'];
    $cities[] = 'Tokijas';
    print_r ($cities);
    $cities2 = [
        'tokijas' => 13.6,
        'vasingtonas' => 0.6,
        'maskva' => 11.5
    ];
    $cities2['londonas'] = 8.6;
?>
<!DOCTYPE html>
<html lang="lt">
    
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4 užduotis</title>
</head>

<body>
    <ul>
        <li><?php echo "$cities[1]" ?></li>
    </ul>
    <ul>
        <?php
            foreach ($cities2 as $miestas => $reiksme) {
                 echo "<li>Gyventojų skaičius: $reiksme</li>"; 
            }
        ?>
    </ul>
</body>
    
</html>
