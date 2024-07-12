<?php require_once ('../config/errorConfig.php') ?>
<?php require_once('../controleur/connexionControleur.php')?>
<link rel="stylesheet" type="text/css" href="../css/style_2.css">

<body>
    <section class="formAdmin">

    <h2>Connexion Administrateur</h2>

        <form method="post" class="connexion" >

            <label for=""> Username</label>
            <input type="text" name="username">
            <label for=""> Password</label>
            <input type="password" name="password">

            <button>Connexion</button>
            <!-- Créez une nouvelle page HTML avec un formulaire contenant username et password
Au submit du formulaire, vérifiez que le username est bien "xxxxxxx" et que le mot de passe est bien "xxxxxxxx"
Si c'est le cas, affichez un message de succès, sinon un message de rejet -->
<?php function isRequestPost() { 
    return  $_SERVER["REQUEST_METHOD"]=== "POST";
         } ?>
<?php 
    if(isRequestPost()){

        if($_POST['username'] === 'Hajar00' && $_POST['password']=== 'test0') {?>

       
                <p>Vous êtes connecté</p>

                <?php 
                // session_start();
                
                // $_SESSION['username'] = $_POST['username']; // ou la fonction : logUser()
                 logUser() ?>

                

               <?php ;
               // ou la fonction redirectToAdmin()
                    redirectToAdmin()
                ?>

                ?>
   <?php } else { ?>
            <p>Votre identifiant ou mot de passe semble incorrect"</p>
  <?php  };
} ?>

        </form>

        
    </section>

    
    
</body>