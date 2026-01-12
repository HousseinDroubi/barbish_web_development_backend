<?php
    class Point{
        private $x=0;
        private $y=0;

        public function __construct($x, $y){
            echo "Object has been constructed<br>";
            if($x>0 && $y>0){
                $this->x = $x;
                $this->y = $y;
            }
        }

        // __destruct(): A special method that runs when an object is destroyed; used to clean up resources (like closing files or connections).
        public function __destruct(){
            echo "Object has been destructed<br>";
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

    $p1 = new Point(10,20);
    $p1 = NULL; // This will automatically call __destruct function

    $p2 = new Point(5,5);
?>