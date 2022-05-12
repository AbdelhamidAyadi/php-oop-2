<?php
class food extends AnimalProducts{
    public $weight;
    function __construct($_name,$_price,$_animalType,$_weight){
        parent::__construct($_name,$_price,$_animalType);
        $this -> weight = $_weight;
        
    }
    
}
?>