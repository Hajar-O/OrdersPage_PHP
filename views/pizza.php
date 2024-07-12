
<h1>Pizza de Luigi</h1>

<!-- TP : 
Créez un nouveau fichier contenant une classe Pizza.
Ajoutez en propriétés privées : size, price, base, ingredient1, ingredient2, ingredient3, status, orderedAt
Faites en sorte que quand une nouvelle Pizza est créée (nouvelle instance), toutes les propriétés soient obligatoirement remplies, soit par l'utilisateur, soit calculées.
Faites une méthode pay() qui permet de passer la pizza en status "payé" uniquement si le statut actuel est "en cours"
Faites une méthode ship() qui permet de passer la pizza en status "livré" uniquement si le status actuel est "payé" -->
<?php

class Pizza {

    private $status;

    private $size;

    private $price;

    private $base;

    private $ingredient; 

    private $ingredient2;

    private $ingredient3;

    private $orderedAt;

   public function __construct($size, $base, $ingredient, $ingredient2, $ingredient3){
        // j'initialise par defaut les variables avec la fonction "__construct()"
        $this->status = "en cours de commande";
        $this-> size = $size;
        $this-> base = $base;
        $this-> ingredient = $ingredient;
        $this -> price = 0;

        $this-> ingredient2 = $ingredient2;

        $this-> ingredient3 = $ingredient3;

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
    
};

$norgevienne = new pizza ("m","creme", "saumon", "roquete", "aneth");
$norgevienne -> pay();

var_dump($norgevienne);