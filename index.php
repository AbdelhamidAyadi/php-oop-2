<?php
class AnimalProducts{
    public $name;
    public $price;
    public $animalType;

    function __construct($_name,$_price,$_animalType){
        $this -> name = $_name;
        $this -> price = $_price;
        $this -> animalType = $_animalType;
    }
    
}

class food extends AnimalProducts{
    public $weight;
    function __construct($_name,$_price,$_animalType,$_weight){
        parent::__construct($_name,$_price,$_animalType);
        $this -> weight = $_weight;
        
    }
    
}
class toys extends AnimalProducts{
    public $material;
    function __construct($_name,$_price,$_animalType,$_material){
        parent::__construct($_name,$_price,$_animalType);
        $this -> material = $_material;
        
    }

}
class cages extends AnimalProducts{
    public $weight;
    public $material;
    public $dimensions;
    function __construct($_name,$_price,$_animalType,$_material, $_weight ,$_dimensions){
        parent::__construct($_name,$_price,$_animalType);
        $this -> material = $_material;
        $this -> weight = $_weight;
        $this -> dimensions = $_dimensions;
        
    }
    
}

class users{
    public $name;
    public $email;
    public $creditCard;
    public $creditCardYear;
    public $registrated;
    public $sconto;
    public $validCreditCard;
    function __construct($_name,$_email,$_creditCardNumber,$_creditCardYear,$_registrated){
        $this -> name = $_name;
        $this -> email = $_email;
        $this -> creditCardNumber = $_creditCardNumber;
        $this -> creditCardYear = $_creditCardYear;
        $this -> registrated = $_registrated;
        $this -> setSconto($_registrated);
        $this -> creditCardValidity($_creditCardYear);
        
    }
    public function setSconto($_registrated){
        if ($_registrated == true) {
            $this -> sconto = 20;
        }
    }
    public function creditCardValidity($_creditCardYear){
        if ($_creditCardYear > 2022 ) {
            $this -> validCreditCard = true;

        }else{
            $this -> validCreditCard = false;
        }
    }
}


$dogFood = new food("Pedigree Adult Dry Dog Food, Steak & Vegetable",35,"Dogs",15);
$catToy = new toys("Hartz Just For Cats",7,"Cats","Plastic");
$dogCage = new cages ("MidWest Homes for Pets iCrate, Single Door & Double Door Dog Crates", 45,"Dogs","Steel",8,"30 x 19 x 21 inches");


$vito = new users ("Vito","Vito_scaletta@mail.it",1209348745657843,2030,true);
var_dump($vito);
var_dump($dogCage);
?>
