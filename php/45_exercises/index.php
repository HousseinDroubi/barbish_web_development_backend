<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    class Point{
        public $x;
        public $y;

        public function details(){
            echo "($this->x,$this->y)";
        }
    }

    $p1 = new Point();
    $p1->x = 10;
    $p1->y = 20;
    $p1->details();
    echo '<hr>';
    $p2 = new Point();
    $p2->x = 0;
    $p2->y = 0;
    $p2->details();
?>