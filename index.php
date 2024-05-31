<?php
    session_start();
    ob_start();

    $pageTitle = 'Page ajout produit'
?>


    <div id=wrapper>
        <h1>Ajouter produit</h1>
        <a href="recap.php">Aller au recap</a>
        
    </div>    

<?php

$content = ob_get_clean();

require_once "template.php"; ?>