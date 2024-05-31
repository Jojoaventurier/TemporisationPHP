<?php
    session_start();
    ob_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajout produit</title>
</head>
<body>
    <div id=wrapper>
        <h1>Ajouter produit</h1>
        <a href="recap.php">Aller au recap</a>
        
    </div>    

</body>
</html>

<?php

$content = ob_get_clean();

require_once "template.php"; ?>