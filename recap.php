<?php
    session_start();
    ob_start();

    $pageTitle = 'Recapitulatif produits'
?>

    <div id=wrapper>
        <h1>récapitulatif produits</h1>
        <a href="index.php">Aller à l'accueil</a>

    </div>    

<?php

$content = ob_get_clean();

require_once "template.php"; ?>