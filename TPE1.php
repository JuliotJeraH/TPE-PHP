<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TPE 1</title>
</head>
<body>
    <h1>Analyse de chaines</h1>
    <?php 
    extract($_GET);
    require_once("functions.php");

    nombre_caracteres($n);
    nombreMaj($n);
    nombreMin($n);
    nombreChiffres($n);
    nombre_caractereSpeciaux($n);
    ?>

</body>
</html>