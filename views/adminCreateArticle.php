<?php require_once ('../config/errorConfig.php') ?>
<?php require_once('../controleur/adminCAControleur.php')?>

<!-- Les superglobales sont reconnues par leur _ et qu'elles soient écrites en majuscules -->
<body>
<header>
<?php require_once ('../partials/header.php');?>
</header>
<main>
    <!-- <p>Bonjour <?php $_SESSION['username'] ?></p> -->
        <section class="admin_article">
            <form method="post">

                <label for="">
                    <input type="text" name="title" placeholder= Title>
                </label>
                <label for="">
                    <input type="text" name="content" placeholder=Content>
                </label>
                <label for="">
                    <input type="text" name="image" placeholder=Image>
                </label>
               <button>Create</button>

            </form>


            <!-- //Je verifie que la requete est de type post -->

            <?php if(isRequestPost()){ ?>

                <!-- // Je verifie que mon tableau d'erreur est vide pour afficher mon message valide. -->

                <?php if (empty(getInvalidData ())) { ?>
  
                    <p>Votre article a bien été créé.</p>

                <?php } else { ?>

            <!-- // pour chaque erreur dans le tableau, les afficher -->
                    <?php foreach(getInvalidData () as $error) {?>

                        <p><?php echo $error ?> </p>

                    <?php }?>


                <?php } ?>

                
             <?php   } ?>

        </section>
<?php  require_once('../partials/bar_laterale.php');?>
    </main>

<?php  require_once('../partials/footer.php'); ?>
</body>
