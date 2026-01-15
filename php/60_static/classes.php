<?php
    // The static keyword allows properties or methods to be accessed without creating an object instance, and they can be called directly through the parent class.
    class Shape{
        public static $counter = 0;
        public function __construct(){
            self::$counter++;
        }
    }

    class Square extends Shape{
        public $side;

        public function __construct($side){
            parent::__construct();
            $this->side = $side;
        }

    }

?>