<?php

    class Car{
        public $brand;
        public $color;
        public function __construct($brand, $color){
            $this->brand = $brand;
            $this->color = $color;
        }

        public function __destruct(){
            echo "Destroying car: [$this->brand]<br>";
        }

        public function display():string{
            return "<p>This car has a brand of $this->brand and color of $this->color</p>";
        }
    }

    $car_1 = new Car("b1","black");
    $car_2 = new Car("b2","red");

    echo $car_1->display();
    echo $car_2->display();
?>