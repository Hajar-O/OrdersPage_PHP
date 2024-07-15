<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php require_once ('../config/errorConfig.php') ?>
<body>
<?php require_once ('../partials/header.php');?>


<main>


<h1>Pizza de Luigi</h1>
<?php
require_once("../meal.php");

class Pizza extends Meal {

    

    private $base;

    private $ingredient; 

    private $ingredient2;

    private $ingredient3;

   

   public function __construct($size, $base, $ingredient, $ingredient2, $ingredient3){
        // j'initialise par defaut les variables avec la fonction "__construct()"
        $this->status = "en cours de commande";
        $this-> size = $size;
        $this-> base = $base;
        $this-> ingredient = $ingredient;
        $this -> price = 0;

        $this-> ingredient2 = $ingredient2;

        $this-> ingredient3 = $ingredient3;

// création d'une nouvelle instance DATETIME.
        $this-> orderedAt = new DATETIME("NOW"); 

// Je détermine le prix en fonction de la taille.
            if($this -> size === "s"){
                $this -> price = 8;
            };
            if($this -> size === "m"){
                $this -> price = 10;
            };
            if($this -> size === "l"){
                $this -> price = 12;
            };
            if($this -> size === "xl"){
                $this -> price = 14;
            }
    }
// méthode pay() qui permet de passer la pizza en status "payé" uniquement si le statut actuel est "en cours"
    public function pay (){
        if($this->status === "en cours de commande"){

            $this -> status = "payé";
        }
    }
// méthode ship() qui permet de passer la pizza en status "livré" uniquement si le status actuel est "payé
    public function ship(){
        if($this -> status === "payé"){

            $this -> status = "livré";
        }
    }
    // Je génère des getters pour faire apparaitres les propriétés privées dans le HTML.
    public function getSize(){
        return 'Taille : ' .$this -> size;
    }

    public function getBase(){
        return 'Base : ' . $this->base;
    }

    public function getIngredients(){
        return'Ingrédients: ' . $this->ingredient . ', ' . $this->ingredient2 . ', ' . $this->ingredient3;
    }
    public function getPrice(){
        return 'Price : ' . $this->price;
    }
    
};
// création d'une nouvelle instance.
$norgevienne = new pizza ("m","creme", "saumon", "roquete", "aneth");
$norgevienne -> pay();
?>

        <section class="orderPizza">
            <h3>Order</h3>

                    <p>  <?php echo $norgevienne -> getSize() ?> </p>
                    <p> <?php echo $norgevienne-> getBase() ?> <br>
                    <p>  <?php echo $norgevienne -> getIngredients() ?> </p>
                    <p>  <?php echo $norgevienne -> getPrice() ?> € </p>

        </section>
       
             
            




<?php  require_once('../partials/bar_laterale.php');?>
</main>
<?php  require_once('../partials/footer.php'); ?>
</body>
</html>


<!-- TP : 
Créez un nouveau fichier contenant une classe Pizza.
Ajoutez en propriétés privées : size, price, base, ingredient1, ingredient2, ingredient3, status, orderedAt
Faites en sorte que quand une nouvelle Pizza est créée (nouvelle instance), toutes les propriétés soient obligatoirement remplies, soit par l'utilisateur, soit calculées.
Faites une méthode pay() qui permet de passer la pizza en status "payé" uniquement si le statut actuel est "en cours"
Faites une méthode ship() qui permet de passer la pizza en status "livré" uniquement si le status actuel est "payé" -->

        