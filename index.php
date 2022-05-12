<?php
include __DIR__ . './classes/cages.php';
include __DIR__ . './classes/toys.php';
include __DIR__ . './classes/food.php';
include __DIR__ . './classes/users.php';


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

$dogFood = new food("Pedigree Adult Dry Dog Food, Steak & Vegetable",35,"Dogs",15);
$catToy = new toys("Hartz Just For Cats",7,"Cats","Plastic");
$dogCage = new cages ("MidWest Homes for Pets iCrate, Single Door & Double Door Dog Crates", 45,"Dogs","Steel",8,"30 x 19 x 21 inches");


$vito = new users ("Vito","Vito_scaletta@mail.it","male",1209348745657843,2000,8,true);
var_dump($vito);
var_dump($dogCage);

try {
    echo $vito -> creditCardValidity();
    } catch (Exception $notValid) {
    echo "Your card is not valid";
    }


?>