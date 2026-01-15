<?php
   class Square{
        public $side;
        public function __construct($side){
            $this->side = $side;
        }
        
        public function printInfo(){
            echo "side is $this->side<br>";
        }
   }

?>