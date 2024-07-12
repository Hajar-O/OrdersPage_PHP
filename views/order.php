<?php
// je créé une class comportant difféérentes variables. les fonctions comprisent à l'interieur servent à modifier les variables en fonction des modifications que l'on veut appliquer.
class Order {

    private $status;

    private $totalPrice;

    private $productQt;

    private $id;

    private $customer;
        // j'initialise par defaut les variables avec la fonction "__construct()"
    public function __construct($customerName){
        $this->status ="en cours";
        $this->totalPrice = 0;
        $this->productQt = 0;
        $this->id = uniqid();
        $this->customer = $customerName;
    }

    public function pay(){
        if($this->productQt > 0 && $this->totalPrice > 0 && $this->status ==="en cours"){

            $this->status = "payé";
        }
    }
    public function addToCard(){
        if($this->status ==="en cours"){
            $this->productQt++;
            $this->totalPrice = $this->totalPrice + 10;
        }
    }
    public function remouveProduct(){
        if($this->productQt > 0 && $this->totalPrice >0){
            $this->productQt--;
            $this->totalPrice = $this->totalPrice -10;
        }
    }
    public function cancel (){
        if($this-> status === "en cours"&& $this->productQt > 0){
            $this ->status = "annulé";
            $this->productQt = 0;
            $this->totalPrice = 0;
        }
    }
};

$order = new Order("Hajar");

$order->addToCard();
$order->addToCard();

$order->remouveProduct();

$order->cancel();
$order->pay();



var_dump($order);

