<?php require_once('../controleur/articleControleur.php')?>
<?php require_once ('../config/errorConfig.php') ?>

<?php
    if($getFileContents){
        echo "<p>Votre fichier contient des articles.</p>";

        echo "<p>$getFileContents</p>";
    }
    else{
        echo "<p>Votre fichier ne contient aucun article.</p>";
    }
?>