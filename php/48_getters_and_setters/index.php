<?php
    // Getters: Methods used to retrieve (read) the value of a class property.
    // Setters: Methods used to modify (write) the value of a class property, often with validation.

    class Point{
        public $x;
        public $y;

        // Getters
        public function getX():float{
            return $this->x;
        }

        public function getY():float{
            return $this->y;
        }

        // Setters
        public function setX($x):void{
            if($x<0) return;
            $this->x = $x;
        }

        public function setY($y):void{
            if($y<0) return;
            $this->y = $y;
        }

        public function info(){
            echo "($this->x,$this->y)";
        } 
    }

    $p1 = new Point();
    $p1->setX(10);
    $p1->setY(15);
    $p1->info();
?>