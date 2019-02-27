

<?php 

include_once "Calculate.php";

    class Bank extends Calculate{
        
         public function setCalculate($capital,$interest){
            $this->capital=$capital;
            $this->interest=$interest;
        }
        public function getCalculate(){   
            echo " Vivord Rith must pay Interest " .($this->capital*10)/100 . "$"." for duration 365 days with capital " .$this->capital ."$";
        }
    }
    $bank = new Bank();
    $bank->setCalculate(10000,10);
    $bank->getCalculate();

    
    
    

    
    

?>