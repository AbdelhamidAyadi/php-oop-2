<?php
trait UserInfo{
    public $name;
    public $email;
    public $genre;

}
trait creditCard{
    public $creditCardNumber;
    public $creditCardYear;
    public $creditCardMonth;
    public $validCreditCard;

    public function creditCardValidity($_creditCardYear,$_creditCardMonth){
        $month = date("m");
        $year = date("Y");
        if ($_creditCardYear > date("Y") ) {
            $this -> validCreditCard = true;
            
          
        }elseif ($_creditCardMonth > $month && $_creditCardYear = $year ) {
            $this -> validCreditCard = true;
        }else{
            $this -> validCreditCard = false;
            throw new notValid('Is not a number');

        }
    }
}
?>