<?php
class toys extends AnimalProducts{
    public $material;
    function __construct($_name,$_price,$_animalType,$_material){
        parent::__construct($_name,$_price,$_animalType);
        $this -> material = $_material;
        
    }

}
?>