
<?php 
    // class Exchange {
    //     public $riel;
    //     public $dollar;

    //     public function setData($riel,$dollar){
    //         $this->riel=$riel;
    //         $this->dollar=$dollar;
           
    //     }

    //     public function getData(){
    //         return $this->riel/$this->dollar;
    //     }
    // }

    // $exchange = new Exchange();
    // $exchange->setData(12000000, 4000);
    // $exchange->getData();
    // echo "Money Exchange is  ".$exchange->riel."R and Exchange to dollar is  ".$exchange->getData()."$";

    class Exchange{
        public $riel;
        public $dollar;
        public function setData($riel,$dollar){
            $this->riel=$riel;
            $this->dollar=$dollar;
        }
        


        public function getData(){
            return $this->riel/$this->dollar;
        }
    }

    $exchange = new Exchange();
    $exchange->setData(12000000,4000);
    $exchange->getData();
    echo "money exchange is ".$exchange->riel ." R and exchange to dollar is ".$exchange->getData()."$";

?>