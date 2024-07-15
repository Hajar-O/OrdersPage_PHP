<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php
require_once("../controleur/listProductBddController.php"); ?>
    <main>
         <section>
                    <?php foreach($products as $product){ ?>

                        <h1> <?php echo $product['titre'] ?></h1>
                        <h3> <?php echo $product['sous_titre'] ?></h3>
                        <p> <?php echo $product['description'] ?></p>

                    <?php } ?>

        </section>
        

</main>
</body>
</html>
