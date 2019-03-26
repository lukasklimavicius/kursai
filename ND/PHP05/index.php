<?php 
    $cities3 = [
        'Tokijas' => [13.6, 1869, 'Japonija'],
        'Vasingtonas' => [0.6, 1790, 'JAV'],
        'Maskva' => [11.5, 1147, 'Rusija']
    ];
    $cities3['Londonas'] = [8.6, 43, 'Anglija'];
?>
<!DOCTYPE html>
<html lang="lt">
    
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>5 užduotis</title>
</head>

<body>
    <ul>
        <?php 
        echo '<li>Gyventojų skaičius: '. $cities3['Londonas'][0]. ' mln.</li>';
        echo '<li>Įkurtas: '. $cities3['Londonas'][1]. ' m.</li>';
        echo '<li>Šalis: '. $cities3['Londonas'][2]. '</li>';
        ?>
    </ul>
</body>
    
</html>
