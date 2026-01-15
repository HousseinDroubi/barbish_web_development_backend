<?php
    // private: Accessible only within the class where it is declared. 
    class Shape{
        private $shape_var;
        public function __construct($shape_var){
            $this->shape_var = $shape_var;
        }
    }

    class Square extends Shape{
        public $square_var;

        public function __construct($shape_var,$square_var){
            parent::__construct($shape_var);
            $this->square_var = $square_var;
        }

        public function printInfo(){
            // echo "Shape var is: " . $this->shape_var . "<br>"; // This will throw an error if uncommented
            echo "Square var is: " . $this->square_var . "<br>";

        }
    }

?>