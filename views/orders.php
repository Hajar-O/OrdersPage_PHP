<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php require_once ('../config/errorConfig.php') ?>
<?php require_once('../controleur/ordersControleur.php')?>
<body>
<?php require_once ('../partials/header.php');?>

<!-- TP :

Créez une nouvelle page pour afficher une liste de commandes (avec la variable envoyée plus bas).
Pour la date, affichez là dans une format différent de celui qui est envoyé
N'oubliez pas de faire une vue, un controleur etc -->
<main>
<section class="orders">
<?php foreach($orders as $order){ ?>
   
        <div class="eachOrder">
            <h3><?php echo $order['id']?> </h3>
            <p>Customer : <?php echo $order['customer'] ?></p>
             <p> Products:  <br> <?php foreach($order['products'] as $order['product']){ ?>
                <?php echo $order['product'] ?></p>

           <?php } ?>
            <p>Total Price : <?php echo $order['amount'] ?></p><br>

            <?php $DateTime = new DateTime ($order['date']) ?>
                <p>Date de création : <?php echo $DateTime->format("d/m/y"); ?></p>
        </div>
       

        

        <?php } ?>
</section>

 
<?php  require_once('../partials/bar_laterale.php');?>
</main>
<?php  require_once('../partials/footer.php'); ?>
</body>
</html>
