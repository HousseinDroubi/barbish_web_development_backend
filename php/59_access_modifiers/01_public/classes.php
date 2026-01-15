<?php
    // public: Accessible from anywhere (inside the class, child classes, and outside the class).
    class Shape{
        public $shape_var;
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
            echo "Shape var is: " . $this->shape_var . "<br>";
            echo "Square var is: " . $this->square_var . "<br>";

        }
    }

?>