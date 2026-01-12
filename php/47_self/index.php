<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    class Math{
        const PI = 3.14159;
        public $radius;

        public function getCircleArea():float{
            // self: Refers to the current class itself, used to access class constants or static members from within the class.
            return self::PI * $this->radius * $this->radius;
        }
    }

    $m1 = new Math();
    $m1->radius = 3;

    echo $m1->getCircleArea();
?>