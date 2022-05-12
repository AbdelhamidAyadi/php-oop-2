<?php
include __DIR__ . './traits.php';
class users{
    use creditCard;
    use UserInfo;
    public $registrated;
    public $sconto;

    function __construct($_name,$_email,$_genre,$_creditCardNumber,$_creditCardYear,$_creditCardMonth,$_registrated){
        $this -> name = $_name;
        $this -> email = $_email;
        $this -> genre = $_genre;
        $this -> creditCardNumber = $_creditCardNumber;
        $this -> creditCardYear = $_creditCardYear;
        $this -> creditCardMonth = $_creditCardMonth;
        $this -> registrated = $_registrated;
        $this -> setSconto($_registrated);
        $this -> creditCardValidity($_creditCardYear,$_creditCardMonth);
        
    }
    public function setSconto($_registrated){
        if ($_registrated == true) {
            $this -> sconto = 20;
        }
    }
    
}
?>