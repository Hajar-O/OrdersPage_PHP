<?php 

    class VendorMachine {
        private $snacks;

        private $cashAmount;

        private $isOn;

        public function __construct(){
            $this->cashAmount = 0;
            $this->isOn = false;
            $this->snacks =[
                [
                    "name" => "Snickers",
                    "price" => 1,
                    "quantity" => 5
                ],
                [
                    "name" => "Mars",
                    "price" => 1.5,
                    "quantity" => 5
                ],
                [
                    "name" => "Twix",
                    "price" => 2,
                    "quantity" => 5
                ],
                [
                    "name" => "Bounty",
                    "price" => 2.5,
                    "quantity" => 5
                ]
                ];
        }
        // turnOn : allume la machine
        public function turnOn(){
            if($this->isOn === false){
                $this->isOn = true;
            }
            
        }

        public function turnOff(){
            // s'il est après 18h (on ne peux pas éteindre la machine avant 18h)
            if($this->isOn === true && intval(date("H")) > 9){
                   // éteint la machine
                $this->isOn=false;
            }
        }

        public function buySnack($snackName){
             // si la machine est allumée
            if($this->isOn===true){
                foreach ($this->snacks as $key => $snack){
                    // si le snack est présent dans la liste
                    if(($snackName == $snack['name']) &&
                        // et que la quantité est suffisante
                        $snack['quantity']>= 1){
                              // on enlève une quantité pour ce snack
                            $this->snacks[$key]['quantity']= $snack['quantity']-1;
                            // et on ajoute au cashAmount le montant du snack
                            $this->cashAmount = $this->cashAmount + $snack['price'];

                        }  
                    }
                
            }
        }

        public function shootWithFoot(){
            if($this->isOn === true){
                $available = [];
                foreach ($this-> snacks as $snack){
                    if(!in_array($snack['quantity'],$available)&&
                        $snack['quantity']>0 ){
                        $available[]= $snack;
                    }
                }
                    if(count($available)>0){
                        $snackRandom = random_int(0,count($available)-1);
                            $this->snacks[$snackRandom]['quantity'] = $this->snacks[$snackRandom]['quantity']-1;
            }
                        
                        // $randomCashAmount = rand(0,$this->cashAmount * 100) / 100;
                        // $this->cashAmount = $this->cashAmount - $randomCashAmount;
        }
     }
    }

    $VendorMachine = new VendorMachine();

    $VendorMachine->turnOn();
  



   $VendorMachine->shootWithFoot();


    var_dump($VendorMachine);