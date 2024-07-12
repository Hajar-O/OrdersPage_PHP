<?php require_once ('../config/errorConfig.php') ?>
<?php require_once('../controleur/contactControleur.php')?>
<!-- 
Créez un nouveau fichier "contact.php". Dans ce fichier faites un require vers le fichier qui configure les erreurs. Puis affichez le header grâce à un require. Créez en HTML un formulaire contenant un champs name, email et message + un bouton submit. -->
<body>
<?php require_once ('../partials/header.php')?> 
    <main>
        <section class="formulaire">
                <form method="post">
                            <label for="">
                                <input type="text" name="lastname" placeholder = Nom> 
                            </label>
                            <label for="">
                                <input type="email" name= "email" placeholder = E-mail> 
                            </label>
                            <label for="">
                                <input type="text" name= "message" placeholder = Message> 
                            </label>
                                <button>Submit</button>
                </form>
           

        <!-- TP : 

Dans votre page contact.php, après le formulaire, faites une condition pour vérifier si des données ont été envoyées en POST (grâce à la variable $_REQUEST). Si oui, affichez un message -->

<!-- TP : 

Ajoutez dans votre message le nom, l'email et le message envoyé dans le formulaire (s'ils ont été envoyés et qu'ils ne sont pas vides) -->
  

 
<?php if(isset($_REQUEST['lastname'])){ ?>

    <?php if (checkIfFormIsValid($_REQUEST)) { ?>
            
                <p> Merci  <?php echo $_REQUEST['lastname']  ?> (<?php echo $_REQUEST['email'] ?>), votre message " <?php echo $_REQUEST    ['message'] ?>" a bien été envoyé !</p>
            
    <?php  }  else { ?>

                <p> Le formulaire comporte des erreurs et n'a pas pu être envoyé.</p>

    <?php } ?>

           

<?php  } ?>
            
            



 </section>

        
    </main> 

    <?php  require_once('../partials/footer.php'); ?>
</body>