<?php
class Meal {

    protected $status;

    protected $size;

    protected $price;

    protected $orderedAt;


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
}
?>