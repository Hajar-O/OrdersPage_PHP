<?php require_once ('../config/errorConfig.php') ?>
<?php require_once('../controleur/produitsControleur.php')?>

<body>
<?php require_once ('../partials/header.php');?>

        <main>

            <section class="filter">
            
                    <form>

                        <select name="category" id="">
                        <option value="" selected disabled>Choose Category</option>

                    <?php foreach ($categorys as $category){?>
                            <option value="<?php echo $category?>"><?php echo $category ?></option>
                  <?php  }?>
                         
                        </select>

                        <label>Prix minimum : </label>
                            <input type="number" name="minPrice" min="<?php echo $minPrice; ?>" max="<?php echo $maxPrice; ?>"/>

                            <label>Prix maximum : </label>
                            <input type="number" name="maxPrice" min="<?php echo $minPrice; ?>" max="<?php echo $maxPrice; ?>"/>

                       
                        

                    <label >Trier par : </label>
                                    <select name="sort">

                                        <option value="">Par défaut</option>
                                        <option value="price">Prix</option>
                                        <option value="date">Date</option>

                                    </select>

                                    <button type="submit">Filtrer</button>
                                    <button><a href="http://localhost:8888/tp_blog/views/produits.php"></a>Reset</button>

                    </form>
            </section>

            <section class= "produits">

            <?php foreach ($products as $product){ ?>

                <div class="article">
                   <h3><?php echo $product['name']?> </h3> 
                    <p> Price : <?php echo $product['price'] ?> </p>
                    <p> Category :  <?php echo $product['category'] ?> </p>
                    <p> Description :<?php echo $product['description'] ?></p>

<!-- J'utilise la classe dateTime avec le mot clé "new" et je lui passe en paramètre ma date en chaine de caractère DateTime créé une vrai date que l'on va pouvoir manipuler: affichere uniquement le mot ou l'année avec le format que l'on veut. On peut égalaement comparer deux date. -->
                    <?php $createdAtDateTime = new DateTime ($product['createdAt']) ?>
                    <p> Date de création : <?php echo $createdAtDateTime->format("d/m/y"); ?></p>
                </div>
              <?php  } ?>


            </section>
    


<?php  require_once('../partials/bar_laterale.php');?>
        </main>


<?php  require_once('../partials/footer.php'); ?>
   

</body>