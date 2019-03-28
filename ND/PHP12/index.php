<?php
if (isset($_POST['vardas']) || isset($_POST['pavarde'])) {
    echo "Neįvesta vardas arba pavardė";
    exit();
} elseif (!empty($_POST['vardas']) && !empty($_POST['pavarde'])) {
    echo 'Sveiki, '.$_POST['vardas']. ' '.$_POST['pavarde'];
    exit();
}

?>
<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <form action="<?php $_PHP_SELF; ?>" method="POST">
        Jūsų vardas: <input type="text" name="vardas">
        Jūsų pavardė: <input type="text" name="pavarde">
        <input type="submit">
    </form>
    
</body>
</html>
