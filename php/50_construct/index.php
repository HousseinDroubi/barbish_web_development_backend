<?php
    class Point{
        private $x=0;
        private $y=0;
        
        // __construct(): A special method that runs automatically when an object is created; used to initialize properties or set up resources.
        public function __construct($x, $y){
            if($x>0 && $y>0){
                $this->x = $x;
                $this->y = $y;
            }
        }

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

    $p1 = new Point(-10,-20);
    $p1->info();
?>
