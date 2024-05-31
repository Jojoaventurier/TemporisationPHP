<?php
    session_start();
    ob_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Récapitulatif produits</title>
</head>
<body>
    <div id=wrapper>
        <h1>récapitulatif produits</h1>
        <a href="index.php">Aller à l'accueil</a>

    </div>    

</body>
</html>

<?php

$content = ob_get_clean();

require_once "template.php"; ?>