<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TPE 4</title>
</head>
<body>
    <h1>Conversion d’un nombre en anglais:</h1>
    <?php 
    extract($_GET);
    require_once("functions.php");
    IntToEnlish($n);
    
    ?>
</body>
</html>