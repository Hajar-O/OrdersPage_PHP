<?php require_once ('../config/errorConfig.php') ?>
<?php require_once('../controleur/reviewsControleur.php')?>
<body>
    <header>
<?php require_once ('../partials/header.php');?>
    </haeder>
        <main>
            <section class="comment">

                 <h2>Les commentaires</h2>

                        <div class="reviews">
                            <?php foreach($reviews as $review){?>
                                <div>
                                 <p>  <?php echo $review['user'];?></p>
                                 <p>  <?php echo $review['message'];?></p>
                                <p> <?php echo $review['rating'];?></p>
                                    
                                </div>
                           <?php }?>
                        </div>
            </section>
<?php  require_once('../partials/bar_laterale.php');?>
    </main> 
<?php  require_once('../partials/footer.php'); ?>
</body>