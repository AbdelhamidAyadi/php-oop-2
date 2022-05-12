<?php
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
?>