<?php
if (isset($_GET['ilgis']) && isset($_GET['plotis'])) {
    echo 'Stačiakampio plotas: '.$_GET['ilgis']*$_GET['plotis'];
    exit();
}
?>
<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <form action="<?php $_PHP_SELF; ?>" method="GET">
        Stačiakampio ilgis: <input type="number" name="ilgis">
        Stačiakampio plotis: <input type="number" name="plotis">
        <input type="submit">
    </form>
    
</body>
</html>
