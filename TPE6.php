<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>TPE 6</title> 
</head>
<body>
    <h1>: Générateur d’anagrammes</h1>
    <?php
    extract($_GET);
    require_once("functions.php");
    genererAnagrammes($n);
    ?>
</html>