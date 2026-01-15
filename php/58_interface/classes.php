<?php
    // An interface defines method signatures that must all be overridden by implementing classes; a class can extend one abstract class and implement multiple interfaces.
    abstract class Shape{
        abstract public function getArea();

        abstract public function getPerimeter();
        
    }

    interface Info{
        public function info();
    }


    interface Details{
        public function printNumberOfSides();
    }



    class Square extends Shape implements Info, Details{
        public $side;
        public function __construct($side){
            $this->side = $side;
        }

        public function getArea():float{
            return $this->side * $this->side;
        }

        public function getPerimeter():float{
            return $this->side * 4;
        }

        public function info(){
            echo "Square<br>";
        }

        public function printNumberOfSides(){
            echo "Number of sides are 4";
        }

    }

    class Rectangle extends Shape implements Info, Details{
        public $width;
        public $height;

        public function __construct($width,$height){
            $this->width = $width;
            $this->height = $height;
        }

        public function getArea():float{
            return $this->width * $this->height;
        }

        public function getPerimeter():float{
            return ($this-> width + $this->height)*2;
        }
        
        public function info(){
            echo "Rectangle<br>";
        }

        public function printNumberOfSides(){
            echo "Number of sides are 4";
        }
    }

    class Triangle extends Shape implements Info, Details{
        public $s1;
        public $s2;
        public $s3;
    
        public $height;
        public $base;


        public function __construct($base,$height,$s1,$s2,$s3){
            $this->s1 = $s1;
            $this->s2 = $s2;
            $this->s3 = $s3;
            $this->base = $base;
            $this->height = $height;
        }

        public function getArea():float{
            return $this->width * $this->height / 2;
        }

        public function getPerimeter():float{
            return ($this-> width + $this->height)*2;
        }

        public function info(){
            echo "Traingle<br>";
        }

        public function printNumberOfSides(){
            echo "Number of sides are 3";
        }
    }
?>