<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotdog</title>
</head>
<body>

<main>
<h1>Hotdog</h1>

    <?php

    require_once("../meal.php");

class Hotdog extends Meal {

    private $bread;

    
   public function __construct($size, $bread){
        // j'initialise par defaut les variables avec la fonction "__construct()"
        $this->status = "en cours de commande";
        $this-> size = $size;
        $this-> bread = $bread;
       
        $this -> price = 0;

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

    public function getBread(){
        return 'Base : ' . $this->bread;
    }

    public function getPrice(){
        return 'Price : ' . $this->price;
    }
    
};


$FirstHotdog = new Hotdog ("s","tosté");
$FirstHotdog -> pay();
$FirstHotdog-> ship();
?>

        <section class="orderPizza">
            <h3>Order</h3>

                <p>  <?php echo $FirstHotdog -> getSize() ?> </p>
                <p> <?php echo $FirstHotdog-> getBread() ?> <br>
                <p>  <?php echo $FirstHotdog -> getPrice() ?> € </p>

        </section>




</main>
</body>
</html>