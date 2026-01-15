<?php
/*
    Abstraction is achieved using abstract classes, which can contain concrete methods (methods with body);
    methods without a body must be overridden by subclasses,
    and abstract classes cannot be instantiated.
*/
    // abstract class cannot be instantiated
    abstract class Shape{
        // abstract method MUST be overridden by children classes, unless the child class is also abstract
        abstract public function getArea();

        abstract public function getPerimeter();
        
        public function info(){
            echo "Shape<br>";
        }
    }


    class Square extends Shape{
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
    }

    class Rectangle extends Shape{
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
    }

    class Triangle extends Shape{
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
    }
?>