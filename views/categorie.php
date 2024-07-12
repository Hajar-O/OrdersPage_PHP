<?php require_once ('../config/errorConfig.php') ?>
<?php require_once('../controleur/categorieControleur.php')?>

<body>

<!-- TP :
Sur votre projet actuel, faites une nouvelle page "categories". Cette page servira à afficher des catégories d'articles (envoyées plus bas)
Créez les fichiers nécessaires (views, controller etc) pour charger cette page avec le header, la barre latérale et le footer. entre le header et la barre latérale, affichez toutes les catégories issues de la variable -->


<?php require_once ('../partials/header.php');?>
        <main>
             <section>
                     <div>
                            <h2> La liste de catégorie </h2> 
                                <?php 
                                        
                                        foreach ($categories as $categorie){
                                            echo "<h3>";
                                                echo $categorie['name'];
                                            echo"</h2>";
                                        };
                                ?>

                        </div>
                </section>
<?php  require_once('../partials/bar_laterale.php');?>
        </main>


<?php  require_once('../partials/footer.php'); ?>
</body>

