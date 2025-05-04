<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TPE 5</title>
</head>
<body>
    <h1>Décomposition en produit de facteurs premiers</h1>
    <?php 
    extract($_GET);
    require_once("functions.php");
    DecompoProduitFact($n);
    
    
    ?>
</body>
</html>